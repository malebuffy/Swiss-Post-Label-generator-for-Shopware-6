<html>  

<head>
<link rel="stylesheet" href="stylesheet.css">
</head>

<body>

<h1 itemprop="headline">Barcode Label</h1>

<form action="create_label.php" method="post" onsubmit="return confirm('VORSICHT! Label wird kostenpfilchtig erstellt. Weiter zur Erstellung?');">

<input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>">

<label for="order_id" class="ff-el-input--label">Order Id:</label>
<input type="text" name="order_id" class="ff-el-form-control" value="<?php echo $_GET['order_id']; ?>"><br>

<label for="vorname" class="ff-el-input--label">Vorname:</label>
<input type="text" name="vorname"class="ff-el-form-control" value="<?php echo $_GET['first_name']; ?>"><br>

<label for="nachname" class="ff-el-input--label">Nachname:</label>
<input type="text" name="nachname"class="ff-el-form-control" value="<?php echo $_GET['last_name']; ?>"><br>

<label for="vorname2" class="ff-el-input--label">Vorname 2:</label>
<input type="text" name="vorname2"class="ff-el-form-control" value="<?php echo $_GET['first_name2']; ?>"><br>

<label for="nachname2" class="ff-el-input--label">Nachname 2:</label>
<input type="text" name="nachname2"class="ff-el-form-control" value="<?php echo $_GET['last_name2']; ?>"><br>


<label for="strasse" class="ff-el-input--label">Strasse:</label>
<input type="text" name="strasse"class="ff-el-form-control" value="<?php echo $_GET['street']; ?>"><br>

<label for="nummer" class="ff-el-input--label">Hausnummer:</label>
<input type="text" name="nummer"class="ff-el-form-control" value="<?php echo $_GET['number']; ?>"><br>

<label for="plz" class="ff-el-input--label">Postleitzahl:</label>
<input type="text" name="plz"class="ff-el-form-control" value="<?php echo $_GET['zipcode']; ?>"><br>

<label for="ort" class="ff-el-input--label">Ort:</label>
<input type="text" name="ort" class="ff-el-form-control" value="<?php echo $_GET['ort']; ?>"><br>

<label for="Land" class="ff-el-input--label">Land:</label>
<select name="land"class="ff-el-form-control">
    <!-- <option value="AF">Afghanistan</option> -->
    <!-- <option value="AX">Åland Islands</option> -->
    <!-- <option value="AL">Albania</option> -->
    <!-- <option value="DZ">Algeria</option> -->
    <!-- <option value="AS">American Samoa</option> -->
    <!-- <option value="AD">Andorra</option> -->
    <!-- <option value="AO">Angola</option> -->
    <!-- <option value="AI">Anguilla</option> -->
    <!-- <option value="AQ">Antarctica</option> -->
    <!-- <option value="AG">Antigua and Barbuda</option> -->
    <!-- <option value="AR">Argentina</option> -->
    <!-- <option value="AM">Armenia</option> -->
    <!-- <option value="AW">Aruba</option> -->
    <!-- <option value="AU">Australia</option> -->
    <!-- <option value="AT">Austria</option> -->
    <!-- <option value="AZ">Azerbaijan</option> -->
    <!-- <option value="BS">Bahamas</option> -->
    <!-- <option value="BH">Bahrain</option> -->
    <!-- <option value="BD">Bangladesh</option> -->
    <!-- <option value="BB">Barbados</option> -->
    <!-- <option value="BY">Belarus</option> -->
    <!-- <option value="BE">Belgium</option> -->
    <!-- <option value="BZ">Belize</option> -->
    <!-- <option value="BJ">Benin</option> -->
    <!-- <option value="BM">Bermuda</option> -->
    <!-- <option value="BT">Bhutan</option> -->
    <!-- <option value="BO">Bolivia, Plurinational State of</option> -->
    <!-- <option value="BQ">Bonaire, Sint Eustatius and Saba</option> -->
    <!-- <option value="BA">Bosnia and Herzegovina</option> -->
    <!-- <option value="BW">Botswana</option> -->
    <!-- <option value="BV">Bouvet Island</option> -->
    <!-- <option value="BR">Brazil</option> -->
    <!-- <option value="IO">British Indian Ocean Territory</option> -->
    <!-- <option value="BN">Brunei Darussalam</option> -->
    <!-- <option value="BG">Bulgaria</option> -->
    <!-- <option value="BF">Burkina Faso</option> -->
    <!-- <option value="BI">Burundi</option> -->
    <!-- <option value="KH">Cambodia</option> -->
    <!-- <option value="CM">Cameroon</option> -->
    <!-- <option value="CA">Canada</option> -->
    <!-- <option value="CV">Cape Verde</option> -->
    <!-- <option value="KY">Cayman Islands</option> -->
    <!-- <option value="CF">Central African Republic</option> -->
    <!-- <option value="TD">Chad</option> -->
    <!-- <option value="CL">Chile</option> -->
    <!-- <option value="CN">China</option> -->
    <!-- <option value="CX">Christmas Island</option> -->
    <!-- <option value="CC">Cocos (Keeling) Islands</option> -->
    <!-- <option value="CO">Colombia</option> -->
    <!-- <option value="KM">Comoros</option> -->
    <!-- <option value="CG">Congo</option> -->
    <!-- <option value="CD">Congo, the Democratic Republic of the</option> -->
    <!-- <option value="CK">Cook Islands</option> -->
    <!-- <option value="CR">Costa Rica</option> -->
    <!-- <option value="CI">Côte d'Ivoire</option> -->
    <!-- <option value="HR">Croatia</option> -->
    <!-- <option value="CU">Cuba</option> -->
    <!-- <option value="CW">Curaçao</option> -->
    <!-- <option value="CY">Cyprus</option> -->
    <!-- <option value="CZ">Czech Republic</option> -->
    <!-- <option value="DK">Denmark</option> -->
    <!-- <option value="DJ">Djibouti</option> -->
    <!-- <option value="DM">Dominica</option> -->
    <!-- <option value="DO">Dominican Republic</option> -->
    <!-- <option value="EC">Ecuador</option> -->
    <!-- <option value="EG">Egypt</option> -->
    <!-- <option value="SV">El Salvador</option> -->
    <!-- <option value="GQ">Equatorial Guinea</option> -->
    <!-- <option value="ER">Eritrea</option> -->
    <!-- <option value="EE">Estonia</option> -->
    <!-- <option value="ET">Ethiopia</option> -->
    <!-- <option value="FK">Falkland Islands (Malvinas)</option> -->
    <!-- <option value="FO">Faroe Islands</option> -->
    <!-- <option value="FJ">Fiji</option> -->
    <!-- <option value="FI">Finland</option> -->
    <!-- <option value="FR">France</option> -->
    <!-- <option value="GF">French Guiana</option> -->
    <!-- <option value="PF">French Polynesia</option> -->
    <!-- <option value="TF">French Southern Territories</option> -->
    <!-- <option value="GA">Gabon</option> -->
    <!-- <option value="GM">Gambia</option> -->
    <!-- <option value="GE">Georgia</option> -->
    <!-- <option value="DE">Germany</option> -->
    <!-- <option value="GH">Ghana</option> -->
    <!-- <option value="GI">Gibraltar</option> -->
    <!-- <option value="GR">Greece</option> -->
    <!-- <option value="GL">Greenland</option> -->
    <!-- <option value="GD">Grenada</option> -->
    <!-- <option value="GP">Guadeloupe</option> -->
    <!-- <option value="GU">Guam</option> -->
    <!-- <option value="GT">Guatemala</option> -->
    <!-- <option value="GG">Guernsey</option> -->
    <!-- <option value="GN">Guinea</option> -->
    <!-- <option value="GW">Guinea-Bissau</option> -->
    <!-- <option value="GY">Guyana</option> -->
    <!-- <option value="HT">Haiti</option> -->
    <!-- <option value="HM">Heard Island and McDonald Islands</option> -->
    <!-- <option value="VA">Holy See (Vatican City State)</option> -->
    <!-- <option value="HN">Honduras</option> -->
    <!-- <option value="HK">Hong Kong</option> -->
    <!-- <option value="HU">Hungary</option> -->
    <!-- <option value="IS">Iceland</option> -->
    <!-- <option value="IN">India</option> -->
    <!-- <option value="ID">Indonesia</option> -->
    <!-- <option value="IR">Iran, Islamic Republic of</option> -->
    <!-- <option value="IQ">Iraq</option> -->
    <!-- <option value="IE">Ireland</option> -->
    <!-- <option value="IM">Isle of Man</option> -->
    <!-- <option value="IL">Israel</option> -->
    <!-- <option value="IT">Italy</option> -->
    <!-- <option value="JM">Jamaica</option> -->
    <!-- <option value="JP">Japan</option> -->
    <!-- <option value="JE">Jersey</option> -->
    <!-- <option value="JO">Jordan</option> -->
    <!-- <option value="KZ">Kazakhstan</option> -->
    <!-- <option value="KE">Kenya</option> -->
    <!-- <option value="KI">Kiribati</option> -->
    <!-- <option value="KP">Korea, Democratic People's Republic of</option> -->
    <!-- <option value="KR">Korea, Republic of</option> -->
    <!-- <option value="KW">Kuwait</option> -->
    <!-- <option value="KG">Kyrgyzstan</option> -->
    <!-- <option value="LA">Lao People's Democratic Republic</option> -->
    <!-- <option value="LV">Latvia</option> -->
    <!-- <option value="LB">Lebanon</option> -->
    <!-- <option value="LS">Lesotho</option> -->
    <!-- <option value="LR">Liberia</option> -->
    <!-- <option value="LY">Libya</option> -->
    <!-- <option value="LI">Liechtenstein</option> -->
    <!-- <option value="LT">Lithuania</option> -->
    <!-- <option value="LU">Luxembourg</option> -->
    <!-- <option value="MO">Macao</option> -->
    <!-- <option value="MK">Macedonia, the former Yugoslav Republic of</option> -->
    <!-- <option value="MG">Madagascar</option> -->
    <!-- <option value="MW">Malawi</option> -->
    <!-- <option value="MY">Malaysia</option> -->
    <!-- <option value="MV">Maldives</option> -->
    <!-- <option value="ML">Mali</option> -->
    <!-- <option value="MT">Malta</option> -->
    <!-- <option value="MH">Marshall Islands</option> -->
    <!-- <option value="MQ">Martinique</option> -->
    <!-- <option value="MR">Mauritania</option> -->
    <!-- <option value="MU">Mauritius</option> -->
    <!-- <option value="YT">Mayotte</option> -->
    <!-- <option value="MX">Mexico</option> -->
    <!-- <option value="FM">Micronesia, Federated States of</option> -->
    <!-- <option value="MD">Moldova, Republic of</option> -->
    <!-- <option value="MC">Monaco</option> -->
    <!-- <option value="MN">Mongolia</option> -->
    <!-- <option value="ME">Montenegro</option> -->
    <!-- <option value="MS">Montserrat</option> -->
    <!-- <option value="MA">Morocco</option> -->
    <!-- <option value="MZ">Mozambique</option> -->
    <!-- <option value="MM">Myanmar</option> -->
    <!-- <option value="NA">Namibia</option> -->
    <!-- <option value="NR">Nauru</option> -->
    <!-- <option value="NP">Nepal</option> -->
    <!-- <option value="NL">Netherlands</option> -->
    <!-- <option value="NC">New Caledonia</option> -->
    <!-- <option value="NZ">New Zealand</option> -->
    <!-- <option value="NI">Nicaragua</option> -->
    <!-- <option value="NE">Niger</option> -->
    <!-- <option value="NG">Nigeria</option> -->
    <!-- <option value="NU">Niue</option> -->
    <!-- <option value="NF">Norfolk Island</option> -->
    <!-- <option value="MP">Northern Mariana Islands</option> -->
    <!-- <option value="NO">Norway</option> -->
    <!-- <option value="OM">Oman</option> -->
    <!-- <option value="PK">Pakistan</option> -->
    <!-- <option value="PW">Palau</option> -->
    <!-- <option value="PS">Palestinian Territory, Occupied</option> -->
    <!-- <option value="PA">Panama</option> -->
    <!-- <option value="PG">Papua New Guinea</option> -->
    <!-- <option value="PY">Paraguay</option> -->
    <!-- <option value="PE">Peru</option> -->
    <!-- <option value="PH">Philippines</option> -->
    <!-- <option value="PN">Pitcairn</option> -->
    <!-- <option value="PL">Poland</option> -->
    <!-- <option value="PT">Portugal</option> -->
    <!-- <option value="PR">Puerto Rico</option> -->
    <!-- <option value="QA">Qatar</option> -->
    <!-- <option value="RE">Réunion</option> -->
    <!-- <option value="RO">Romania</option> -->
    <!-- <option value="RU">Russian Federation</option> -->
    <!-- <option value="RW">Rwanda</option> -->
    <!-- <option value="BL">Saint Barthélemy</option> -->
    <!-- <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option> -->
    <!-- <option value="KN">Saint Kitts and Nevis</option> -->
    <!-- <option value="LC">Saint Lucia</option> -->
    <!-- <option value="MF">Saint Martin (French part)</option> -->
    <!-- <option value="PM">Saint Pierre and Miquelon</option> -->
    <!-- <option value="VC">Saint Vincent and the Grenadines</option> -->
    <!-- <option value="WS"><</option> -->
    <!-- <option value="SM">San Marino</option> -->
    <!-- <option value="ST">Sao Tome and Principe</option> -->
    <!-- <option value="SA">Saudi Arabia</option> -->
    <!-- <option value="SN">Senegal</option> -->
    <!-- <option value="RS">Serbia</option> -->
    <!-- <option value="SC">Seychelles</option> -->
    <!-- <option value="SL">Sierra Leone</option> -->
    <!-- <option value="SG">Singapore</option> -->
    <!-- <option value="SX">Sint Maarten (Dutch part)</option> -->
    <!-- <option value="SK">Slovakia</option> -->
    <!-- <option value="SI">Slovenia</option> -->
    <!-- <option value="SB">Solomon Islands</option> -->
    <!-- <option value="SO">Somalia</option> -->
    <!-- <option value="ZA">South Africa</option> -->
    <!-- <option value="GS">South Georgia and the South Sandwich Islands</option> -->
    <!-- <option value="SS">South Sudan</option> -->
    <!-- <option value="ES">Spain</option> -->
    <!-- <option value="LK">Sri Lanka</option> -->
    <!-- <option value="SD">Sudan</option> -->
    <!-- <option value="SR">Suriname</option> -->
    <!-- <option value="SJ">Svalbard and Jan Mayen</option> -->
    <!-- <option value="SZ">Swaziland</option> -->
    <!-- <option value="SE">Sweden</option> -->
    <option value="CH" selected>Switzerland</option>
    <!-- <option value="SY">Syrian Arab Republic</option> -->
    <!-- <option value="TW">Taiwan, Province of China</option> -->
    <!-- <option value="TJ">Tajikistan</option> -->
    <!-- <option value="TZ">Tanzania, United Republic of</option> -->
    <!-- <option value="TH">Thailand</option> -->
    <!-- <option value="TL">Timor-Leste</option> -->
    <!-- <option value="TG">Togo</option> -->
    <!-- <option value="TK">Tokelau</option> -->
    <!-- <option value="TO">Tonga</option> -->
    <!-- <option value="TT">Trinidad and Tobago</option> -->
    <!-- <option value="TN">Tunisia</option> -->
    <!-- <option value="TR">Turkey</option> -->
    <!-- <option value="TM">Turkmenistan</option> -->
    <!-- <option value="TC">Turks and Caicos Islands</option> -->
    <!-- <option value="TV">Tuvalu</option> -->
    <!-- <option value="UG">Uganda</option> -->
    <!-- <option value="UA">Ukraine</option> -->
    <!-- <option value="AE">United Arab Emirates</option> -->
    <!-- <option value="GB">United Kingdom</option> -->
    <!-- <option value="US">United States</option> -->
    <!-- <option value="UM">United States Minor Outlying Islands</option> -->
    <!-- <option value="UY">Uruguay</option> -->
    <!-- <option value="UZ">Uzbekistan</option> -->
    <!-- <option value="VU">Vanuatu</option> -->
    <!-- <option value="VE">Venezuela, Bolivarian Republic of</option> -->
    <!-- <option value="VN">Viet Nam</option> -->
    <!-- <option value="VG">Virgin Islands, British</option> -->
    <!-- <option value="VI">Virgin Islands, U.S.</option> -->
    <!-- <option value="WF">Wallis and Futuna</option> -->
    <!-- <option value="EH">Western Sahara</option> -->
    <!-- <option value="YE">Yemen</option> -->
    <!-- <option value="ZM">Zambia</option> -->
    <!-- <option value="ZW">Zimbabwe</option> -->
</select><br>

<label for="Gewicht" class="ff-el-input--label">Gewicht:</label>


<?php

// Get Weight of Order
    
    include 'database.php';
	include 'config.php';
	
	$weight_order = 0;
	$order_id = $_GET['id'];
	$result = $conn->query("SELECT order_line_item.product_id, order_line_item.quantity, product.id, product.weight FROM order_line_item INNER JOIN product ON order_line_item.product_id = product.id WHERE order_line_item.order_id  = $order_id");
	$order_line_item_weight = $result->fetch_all(MYSQLI_ASSOC);

		foreach($order_line_item_weight as $line_item_weight) {  
	        		$weight_order = $weight_order + ($line_item_weight["quantity"] * $line_item_weight["weight"]);
                            
	}
	
	$weight_order = $weight_order * 1000; //Convert to gr
	
	// Making sure Post query wont return an error if weight is not added into Shopware
	if ($weight_order < 1) {
	    $weight_order = 10;
	}
	
?>

<input type="text" name="gewicht" class="ff-el-form-control" value="<?php echo $weight_order; ?>"><br>

<label for="versandart" class="ff-el-input--label">Versandart:</label>
<select name="versandart"class="ff-el-form-control">
    <option value='ECO' selected>PostPac Economy</option>
    <option value='PRI'>PostPac Priority</option>
    <option value='SP", "ECO'> Bulky goods Economy</option>
    <option value='SP", "PRI'> Bulky goods Priority</option>
    <option value='PPR'> PostPac Promo</option>
    <option value='SEM'> Swiss-Express “Moon”</option>
    <option value='SEM, SP'> Bulky goods “Moon”</option>
    <option value='SKB'> SameDay afternoon/evening</option>
    <option value='SKB, SP'> SameDay afternoon/evening bulky goods</option>
    <option value='VL'> VinoLog</option>
    <option value='DIR'> Direct parcel posting</option>
    <option value='GAS", "ECO'> PostPac Economy GAS</option>
    <option value='GAS", "PRI'> PostPac Priority GAS</option>
    <option value='GAS", "SP", "ECO'> Bulky goods Economy GAS</option>
    <option value='GAS", "SP", "PRI'> Bulky goods Priority GAS</option>
    <option value='GAS", "SEM'> Swiss-Express “Moon” GAS</option>
    <option value='GAS", "SKB'> SameDay afternoon/evening GAS</option>
    <option value='NOTIME_PickupPoint'> notime eCom with pickup</option>
    <option value='NOTIME_HomeDelivery'> notime eCom with home delivery</option>

</select><br>

<label for="labelsize" class="ff-el-input--label">Label Grösse:</label>
<select name="labelsize"class="ff-el-form-control">
    <option value='A6' selected>A6</option>
    <option value='A7'>A7</option>
   
</select><br>

<label for="showmyaddress" class="ff-el-input--label">Label configuration:</label>
<select name="showmyaddress"class="ff-el-form-control">
    <option value='ONLY_RECIPIENT' selected>Only recipient</option>
    <option value='ONLY_CUSTOMER' >Only own address</option>
    <option value='RECIPIENT_AND_CUSTOMER' >Both addressess</option>
   
</select><br>

<input type="submit" name="completeYes" value="Generate Label"  class="ff-btn ff-btn-submit ff-btn-md ff_btn_style">
</form>

</body>
</html>