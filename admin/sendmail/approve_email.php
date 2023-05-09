<?php

include ('dbcon.php');
$id = $_GET['candidate_id'];
$query = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$id'");
while ($row = $query->fetch_array()){
    $name = $row['firstname'];
	$email = $row['email'];
	$position = $row['position'];
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
// $mail->Body="<h2>Youre registration has been approved by the admin </h2> <br><p>You are qualified to run as $position in SCO Elections.</p><br><p>Thank You!<p>";

$mail->Body="
<html>
<head>
    <title></title>
</head>
<body>
    <div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);border-radius: 5px;font-family:tahoma;width=50%'>

        <div style='background-color: red;margin: 0;display: flex;flex-basis: 20%;border-top-left-radius: 5px;border-top-right-radius: 5px;padding: 0.5em;'>

            <div>
                <p style='font-weight: bold;color: white;font-size: 24px; text-align: center;'>St. Cecilia's College Cebu-Inc.</p>
            </div>
        </div>

        <div style='padding:1.5e m'>
            <h4>Hello $name! You're registration has been approved by the admin </h2> <br><p>You are qualified to run as $position in SCO Elections. </h4>
        </div>

        <div>
            <h4>Thank you!!</h4>
        </div>

    </div>

</body>
</html>
";


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
