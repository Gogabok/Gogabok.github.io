<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'gogabok123@gmail.com';
	$subject = 'gogabok123@gmail.com';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'Reply-To: '. $name . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Заявка отправлена, спасибо!';
    }
	else{
		$res['message'] = 'Ошибка при отправки заявки. Пожалуйста, свяжитесь со мной gogabok123@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>