<!DOCTYPE HTML>
<html>  

<head>
<link rel="stylesheet" href="stylesheet.css">
</head>

</html>

<?php

// Include constants
	include 'config.php';
	include 'database.php';


if (!$_POST["order_id"] or !$_POST["vorname"] or !$_POST["nachname"] or !$_POST["strasse"] or !$_POST["nummer"] or !$_POST["plz"] or !$_POST["ort"]) {
    $message = "No Order Id found: " . $_POST["order_id"] . $_POST["vorname"] . $_POST["nachname"] . $_POST["strasse"] . $_POST["nummer"] . $_POST["plz"] . $_POST["ort"];
    echo $message;
    die();
} 


// Get Form Data from URL
	$id = $_POST["id"];
	$item_id = $_POST["order_id"];
	$vorname = $_POST["vorname"];
	$nachname = $_POST["nachname"];
	$vorname2 = $_POST["vorname2"];
	$nachname2 = $_POST["nachname2"];
	$addresse = $_POST["strasse"];
	$hausnr= $_POST["nummer"];
	$plz = $_POST["plz"];
	$stadt = $_POST["ort"];
	$land = $_POST["land"];
	$gewicht = intval($_POST["gewicht"]);
	$versandart = $_POST["versandart"];
	$labelsize = $_POST["labelsize"];
	$show_my_address = $_POST["showmyaddress"];

// Check if the label already exists - just in case
if (is_writable($spath . $item_id ."_label.jpg")) {
    $message = "The label for order $item_id already exists";
    echo $message;
	echo '<a href="list_orders.php">Click here to return</a>';
    die();
} 

// Initialize Barcode Reuqest - Authentication
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://wedec.post.ch/OAuth/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "grant_type=client_credentials&client_id=" . $client_id . "&client_secret=" . $client_secret . "&scope=WEDEC_BARCODE_READ",
  CURLOPT_HTTPHEADER => [
    "content-type: application/x-www-form-urlencoded"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 
  $data = json_decode($response);
}

$bearer = $data->access_token;
//echo $bearer;
curl_close($curl);

// Initialize Barcode Reuqest - Actual Request
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://wedec.post.ch/api/barcode/v1/generateAddressLabel');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"language": "DE", 	"frankingLicense": "' . $license  .'",	"customer": { "name1": "' . $company_name .'", "street": "' . $company_street .'", "zip": "' . $company_zip .'", "city": "' . $company_city .'", "domicilePostOffice": "' . $domicilePostOffice .'", "country": "' . $company_country .'"	}, "labelDefinition": { "labelLayout": "' . $labelsize .'", "printAddresses": "' . $show_my_address .'", "imageFileType": "JPG", "imageResolution": 300	}, "item": { "itemID": "' . $item_id .'", "recipient": { "name1": "' . $vorname .' ' . $nachname .'", "name2": "' . $vorname2 .' ' . $nachname2 .'", "street": "' . $addresse .'", "houseNo": "' . $hausnr .'", "zip": "' . $plz .'", "city": "' . $stadt .'", "country": "' . $land .'" }, "attributes": { "przl": ["' . $versandart .'"], "weight": ' . $gewicht .' }}}');

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer '.$bearer;
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$data = json_decode($result);
$tracking = $data->item->identCode;
$label = $data->item->label[0];

// Update Order in Databse and input Tracking Number of Label - Uncomment next 3 lines if you do not want the database to be updated automatically
	$tracking_quotes = '["' . $tracking  . '"]';
	$sql = "UPDATE `order_delivery` SET order_delivery.tracking_codes='$tracking_quotes' WHERE order_delivery.order_id=$id";
	$result = $conn->query($sql);


// Create Label Image in Folder
if (!empty($id)) {
	$img = $label;
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	//file = "images/" . uniqid() . '.png';
	$success = file_put_contents($spath . $item_id ."_label.jpg", $data);
}

?>

<script>

	//Pass Variable image to Browser (Javascript)
    var image = "<?php echo $label; ?>";

	// Function to Display Image
    function ImagetoPrint(source)
    {
        return "<html><head><scri"+"pt>function step1(){\n" +
                "setTimeout('step2()', 10);}\n" +
                "function step2(){window.print();window.close()}\n" +
                "</scri" + "pt></head><body onload='step1()'>\n" +
                "<img src='data:image/png;base64, " + source + "' /></body></html>";
    }

	// Function to Display Print Dialog
    function PrintImage()
    {
        var Pagelink = "about:blank";
        var pwa = window.open(Pagelink, "_new");
        pwa.document.open();
        pwa.document.write(ImagetoPrint(image));
        pwa.document.close();
    }
    
    PrintImage(); 
    
     

window.location = "list_orders.php";
     
    

</script>

