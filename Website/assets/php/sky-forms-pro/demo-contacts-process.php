<?php
if(isset($_POST['name'])) {
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array('secret' => '6LetaQwTAAAAAHS8RD62FftO6x5FocZYOC-a18Ys', 'response' => $_POST['g-recaptcha-response']);

	// use key 'http' even if you send the request to https://...
	$options = array(
			'http' => array(
	    	'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
	    	'method'  => 'POST',
	    	'content' => http_build_query($data),
		),
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	$result = json_decode($result);
	if ($result->success == true) {
		$to = 'seth@demonbucket.com'; // Replace with your email	
		$subject = 'New server added on DemonBucket.com'; // Replace with your $subject
		$headers = 'From: seth@demonbucket.com' . "\r\n" . 'Reply-To: seth@demonbucket.com';	
		
		$message = 'Name: ' . $_POST['name'] . "\n" .
		           'Server Address: ' . $_POST['address'] . "\n";
		
		mail($to, $subject, $message, $headers);
	}
}
?>