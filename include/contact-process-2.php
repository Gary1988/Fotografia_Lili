<?php

$recipient = 'gary.montenegro@gaminghub.lat';
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if ($email) {
    $msg = 'E-mail address is valid';
    $ip = getenv('REMOTE_ADDR');
    $host = gethostbyaddr($ip);	
    $mess = "Name: ".$name."\n";
    $mess .= "Email: ".$email."\n";
    $mess .= "Message: ".$message."\n\n";
    $mess .= "IP:".$ip." HOST: ".$host."\n";
    
    // Validar que los campos del encabezado no contengan caracteres adicionales que puedan ser explotados
    if (strpos($email, "\r") === false && strpos($email, "\n") === false) {
        $headers = "From: <".$email.">\r\n"; 
        if(isset($_POST['url']) && $_POST['url'] == ''){
            $sent = mail($recipient, $subject, $mess, $headers); 
        } 
    } else {
        $msg = 'Invalid header';
    }
} else {
    $msg = 'Invalid email address';
}

?>
