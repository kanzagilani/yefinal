<form id="f1" name="f1" action="reportdb.php" method="POST">
	   Enter Account Number:  <input type="date" id="accountno" name="accountno"/>
	  <input type="submit" value="GO" />
</form>






<?php
header("Cotent-Type:application/json");
function deliver_response($status,$status_message,$data)
{
	header("HTTP/1.1 $status $status_message");
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response=json_encode($response);
	echo $json_response;
}
?>