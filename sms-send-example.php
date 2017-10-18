	
########################################################
# Login & get information for the SMS Gateway
########################################################

$api_key = "?";
$type = "text/unicode";
$senderid = urlencode('?');
$phonenum = urlencode('01821720819');
$msg = urlencode('Test Message');
// Gateway URL
$URL = "http://bangladeshsms.com/smsapi?api_key=$api_key&type=$type&contacts=$phonenum&senderid=$senderid&msg=$msg";

// Call Send SMS Function
SendSMS($URL);


// Create a Function of Sending SMS
function SendSMS($URL){		   
	$ch = curl_init();              
	curl_setopt($ch, CURLOPT_URL,$URL);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);           
	curl_setopt($ch, CURLOPT_POST, 0);

	try{
		$output =  $content=curl_exec($ch);
	print_r($output);
	}catch(Exception $ex){ 

		$output = "-100";
	}
	return $output;
}
