<?php 

// File to display orders in paginated format

// Include constants
	include 'database.php';
	include 'config.php';
	
	$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 5000;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result = $conn->query("SELECT DISTINCT order.id,order_number,order_address.company,order_address.department,order_address.first_name,order_address.last_name,order_address.street,order_address.zipcode,order_address.city  FROM `order` INNER JOIN `order_address` ON order.id = order_address.order_id ORDER BY order_address.order_id ASC LIMIT $start, $limit");
	$orders = $result->fetch_all(MYSQLI_ASSOC);
	

	$result1 = $conn->query("SELECT count(`id`) AS `id` FROM `order`");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / $limit );

	If ($pages = 1) { $Previous = 1; }


    function split_street(string $streetStr) :array {
    $aMatch         = array();
    $pattern        = '#^([\w[:punct:] ]+) (\d{1,5})\s?([\w[:punct:]\-/]*)$#';
    preg_match($pattern, $streetStr, $aMatch);
    $street         = $aMatch[1] ?? $streetStr;
    $number         = $aMatch[2] ?? '';
    $numberAddition = $aMatch[3] ?? '';
    return array('street' => $street, 'number' => $number, 'numberAddition' => $numberAddition);
    }
 ?>
 
 <!DOCTYPE html>
<html>
<head>
	<title>Orders - Shipping label management </title>
	<link rel="stylesheet"  href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
</head>
<body>
	<div class="container card">
		<h1 class="text-center">Orders - Shipping label management</h1>
		<div class="row">
			<div class="col-md-10">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li class="page-item">
				      <a  class="page-link" href="list_orders.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo; Previous</span>
				      </a>
				    </li>
				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li class="page-item"><a  class="page-link" href="list_orders.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
				    <? If($i<$pages) {
				    echo '<li class="page-item">';
				    echo '<a  class="page-link" href="list_orders.php?page='. ++$i .'" aria-label="Next">';
				    echo '<span aria-hidden="true">Next &raquo;</span>';
				    echo '</a>';
				    echo '</li>';
				    } ?>
				    
				  </ul>
				</nav>
			</div>
			<div class="text-center form-group" class="col-md-2">
				<form method="post" action="#">
						<select class="form-control" name="Orders Per Page" id="limit-records">
							<option disabled="disabled" selected="selected">Orders per Page</option>
							<?php foreach([10,100,500,1000,5000] as $limit): ?>
								<option <?php if( isset($_POST["limit-records"]) && $_POST["limit-records"] == $limit) echo "selected" ?> value="<?= $limit; ?>"><?= $limit; ?></option>
							<?php endforeach; ?>
						</select>
					</form>
					
				</div>
		</div>
		<div style="height: 600px; overflow-y: auto;">
			<table id="" class="table table-striped table-bordered">
	        	<thead>
	                <tr>
	                    <th>Order Number</th>
	                    <th>Vorname</th>
	                    <th>Nachname</th>
	                    <th>Strasse</th>
	                    <th>Nummer</th>
                        
                        <th>Postleitzahl</th>
	                    <th>Ort</th>
	                    <th>Label</th>	                    
	                    
	              	</tr>
	          	</thead>
	        	<tbody>
	        		<?php foreach($orders as $order) :  
	        		
	        		        $id = "0x" . bin2hex($order["id"]);
	        		        $order_number = $order["order_number"];
                            $first_name = $order["first_name"];
                            $last_name = $order["last_name"];
                            $first_name2 = $order["company"];
                            $last_name2 = $order["department"];
                            $street = $order["street"];
                            $zipcode = $order["zipcode"];
                            $city = $order["city"];
	        		
                    	$address = split_street($order['street']);
                        $street = $address['street'];
                        $number = $address['number'] . $address['numberAddition'];

	        			        		?>
		        		<tr>
		        			<td><?= $order['order_number']; ?></td>
		        			<td><?= $order['first_name']; ?></td>
		        			<td><?= $order['last_name']; ?></td>
		        			<td><?= $street; ?></td>
		        			<td><?= $number; ?></td>
		        			<td><?= $order['zipcode']; ?></td>
		        			<td><?= $order['city']; ?></td>
		        			<td><?php    
		        			 $filename = $spath . $order_number .'_label.jpg';
    
                                if (file_exists($filename)) {
                                    //echo "The file $filename exists";
                                    echo '<a target="_blank" href="image.php?img='. $filename .'" />Display';
                            
                            
                                } else {
                                    //echo "The file $filename does not exist";
                                    echo '<a target="_blank" href="form.php?id=' .  $id . '&order_id=' .  $order_number . '&first_name='. $first_name .'&last_name='. $last_name . '&first_name2='. $first_name2 .'&last_name2='. $last_name2 . '&street='. $street .'&number='. $number .'&zipcode='. $zipcode .'&ort='. $city .'" />Generate';
                            
                                }

		        			?></td>
		        		</tr>
	        		<?php endforeach; ?>
	        	</tbody>
      		</table>

            <a target="_blank" href="form.php?order_id=&first_name=&last_name=&first_name2=&last_name2=&street=&number=&zipcode=&ort=" />Manuell erstellen</a>
      		
		</div>


<script>
	$(document).ready(function(){
		$("#limit-records").change(function(){
			$('form').submit();
		})
	})
</script>
</body>
</html>