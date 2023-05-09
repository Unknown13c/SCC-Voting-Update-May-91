<?php
include ('dbcon.php');
$id = $_GET['candidate_id'];
$query = $conn->query("SELECT * FROM candidate WHERE candidate_id = '$id'");
while ($row = $query->fetch_array()){
	$email = $row['email'];
}

require 'PHPMailer/PHPMailerAutoload.php';
require'constants.php';
//mail send sample code
$mail = new PHPMailer();
//$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->SMTPAuth =true;
$mail->SMTPSecure='tls';  //tls ssl
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;    // 587 465
$mail->IsHTML(true);
$mail->CharSet='UTF-8';
$mail->Username='studentcouncilorganiz@gmail.com';
$mail->Password='sco12345678';
$mail->SetFrom('studentcouncilorganiz@gmail.com', 'Student Council Organization');
$mail->AddAddress($email);
$mail->addReplyTo('no-reply@gmail.com', 'No-reply');
$mail->addCC($email);
$mail->addBCC($email);  
$mail->Subject = 'Student Council Organization Feedback';
$mail->Body="<h2>Youre registration has Rejected by the admin </h2> <br><p>You are not qualified to run as $position in SCO Elections for some Reason.</p><br><p>Thank You!<p>";
$mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => false,
        'verify_depth' => false,
        'allow_self_signed' => false,
        'verify_peer_name' => false
    ]
);

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

?>