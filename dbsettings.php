<?php
$username = "welyxsql1";
$password = "Martinique972";
$hostname = "localhost";

//connection to the database
$conn = new mysqli($hostname, $username, $password, "welyxsql1");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// die(var_dump($ref_no));
$ref_no = mysql_escape_string($_GET['invoice']);
$sql = "SELECT SUM(it.total_cost) as total, inv.status FROM fx_invoices as inv
JOIN fx_items as it ON inv.inv_id = it.invoice_id
WHERE inv.reference_no = '$ref_no'";
$result = $conn->query($sql);

if (
    ($row = $result->fetch_assoc())
 && array_key_exists('total', $row)
 && !is_null($row['total'])
) {
    $invoice = $_GET['invoice'];
    $amount = $row['total'];
    $status = $row['status'];
    $currency = $row['currency'];

} else {
    $fail = true;
}
$conn->close();

$holdername=$_REQUEST['name_on_card'];
$ccnumber=$_REQUEST['card_no'];
$month=$_REQUEST['exp'];
$year=$_REQUEST['exp_year'];
$ccv=$_REQUEST['cvv'];
$address=$_REQUEST['address'];
$price=$_REQUEST['price'];
$invoice=$_REQUEST['invoice'];
$newsale=number_format($price, 2, '', '');

/**
 * Put your API credentials here:
 */

require 'Stripe.php';
// Stripe::setApiKey("sk_test_x6QU1P6gueoIqARIVRj0FR2B");
Stripe::setApiKey("sk_live_JI0eH6MhDtwx0D0i9x0FLG8D");

try
	{
	Stripe_Charge::create(array('amount'=>$newsale,'currency'=>'usd','description'=>$invoice,"card"=>array('number'=>$ccnumber,'name'=>$holdername,'address_line1'=>$address,'exp_month'=>$month,'exp_year'=>$year,'cvc'=>$ccv,'address_zip'=>"")));
	}
catch (Exception $e) { // if the API call returns an error, get the error message for display later
  $error = $e->getMessage();
}
?>
