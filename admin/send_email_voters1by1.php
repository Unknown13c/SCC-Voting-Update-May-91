<?php
include '../dbconnector/dbcon.php';

$voters_id = $_GET['voters_id'];
// $conn->query("UPDATE voters SET a_status = 'Activated' WHERE voters_id = '$voters'");
$query = $conn->query("SELECT * FROM voters WHERE voters_id = '$voters_id'");
while ($row = $query->fetch_array()){
    $idno = $row['id_number'];
    $password = $row['password'];
    $email = $row['email'];
    $name =$row['firstname'];
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
$mail->Subject = 'Student Council Organization Feedback';

// $mail->Body = "<h4>Hey! $name, use this account to vote in SCO election.</h4><p> Username: $idno <br>Password: $password </p><br><p>Thank you!</p>";


$mail->Body="
<html>
<head>
    <title></title>
</head>
<body>
    <div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);border-radius: 5px;font-family:tahoma;width=50%'>

        <div style='background-color: red;margin: 0;display: flex;flex-basis: 20%;border-top-left-radius: 5px;border-top-right-radius: 5px;padding: 0.5em;'>
            <div>
                <p style='font-weight: bold;color: white;font-size: 24px;'>St. Cecilia's College Cebu-Inc.</p>
            </div>
        </div>

        <div style='padding:1.5e m'>
            <h4>Hello $name, use this account to vote in SCO election.</h4><p> Username: $idno <br>Password: $password  </h4>
        </div>

        <form action='send_function.php' method='post' enctype='multipart/form-data'>
            <input type='hidden' value='$idno' name='uname'>
            <input type='hidden' value='$password' name='password'>

            <button type='submit' style='padding: 1em;width: 40%; max-width: 100%;cursor: pointer;font-size: 16px;font-weight: bold;background-color: #4B8B3B;border: none;border-radius: 5px;color: white;'>Vote Now</button>
        </form>

        <div>
            <h4>Thank you fo using scc online voting system</h4>
        </div>

        <div>
            <p>Note:* If you're having trouble clicking the 'Vote Now' button, copy and paste the username and password into your web browser </p>
        </div>


    </div>

</body>
</html>



";
// : <a href='sccvoting.epizy.com'>sccvoting.com</a>

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
     header("Location: voters.php?error=NoInternet");
} else {
    header("Location: voters.php?error=successfulysent");

}
?>