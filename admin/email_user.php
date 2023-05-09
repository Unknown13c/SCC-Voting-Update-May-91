
<?php
include '../dbconnector/dbcon.php';

$user_id = $_GET['user_id'];
$query = $conn->query("SELECT * FROM tbl_admin WHERE user_id = '$user_id'");
while ($row1 = $query->fetch_array()){
	$username = $row1['username'];
	$password = $row1['password'];
	$email = $row1['email'];
    $name =$row1['firstname'];
}

require 'sendmail/PHPMailer/PHPMailerAutoload.php';
require 'sendmail/constants.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth =true;
$mail->SMTPSecure='tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->IsHTML(true);
$mail->CharSet='UTF-8';
$mail->Username='studentcouncilorganiz@gmail.com';
$mail->Password='sco12345678';
$mail->SetFrom('studentcouncilorganiz@gmail.com', 'Student Council Organization');
$mail->AddAddress($email);
$mail->addReplyTo('no-reply@gmail.com', 'No-reply');
$mail->addCC($email);
$mail->addBCC($email);  
$mail->Subject = 'Accounts';
$mail->Body = "<h4>Hey! $name, use this account to login in the system so that you can manage the elections.</h4><p> Username: $username <br>Password: $password </p><br><p>Thank you!</p>";
$mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => false,
        'verify_depth' => false,
        'allow_self_signed' => false,
        'verify_peer_name' => false
    ]
);

if (!$mail->send()) {
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("Location: user.php?error=NoInternet");
} else {
    header("Location: user.php?error=successfulysent");
}

?>

