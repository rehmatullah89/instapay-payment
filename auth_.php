<?php
/*
Result is returned as an array in the format of...
$result = Array
(
    [response] => 1
    [responsetext] => SUCCESS
    [authcode] => 123456
    [transactionid] => 1087714082
    [avsresponse] => Y
    [cvvresponse] => M
    [orderid] =>
    [type] => sale
    [response_code] => 100
)
 *
 */

require ('lib/nmiDirectPost.class.php');
if(isset($_POST['action_button'])){
	$transaction = new nmiDirectPost;
	$transaction->setOrderDescription($_POST['OrderDescription']);
	$transaction->setAmount($_POST['Amount']);
	$transaction->setTax($_POST['Tax']);
	$transaction->setShipping($_POST['Shipping']);
	$transaction->setCcNumber($_POST['CcNumber']);
	$transaction->setCcExp($_POST['CcExp']);
	$transaction->setCvv($_POST['Cvv']);
	$transaction->setCompany($_POST['Company']);
	$transaction->setFirstName($_POST['FirstName']);
	$transaction->setLastName($_POST['LastName']);
	$transaction->setAddress1($_POST['Address1']);
	$transaction->setCity($_POST['City']);
	$transaction->setState($_POST['State']);
	$transaction->setZip($_POST['Zip']);
	$transaction->setPhone($_POST['Phone']);
	$transaction->setEmail($_POST['Email']);
	$transaction->auth();

	$result = $transaction->execute();
	switch($result['response'])
	{
		case 1: //Success
			//Add order to database or whatever other internal action is needed
			//You would generally then redirect your use to the thankyou page
			echo "Successful";
			break;
		default; //Error or fail, The fail response is actually 2, error is 3, but we fail regardless if it's not successful
			//You can redisplay your form here, or do something
			echo "Some Error!";
	}
}
?>