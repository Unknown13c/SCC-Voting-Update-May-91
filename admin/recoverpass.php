<?php

    require '../dbconnector/dbcon.php';
        $emailpass = $_GET['forgotpass'];
        
        echo $emailpass;
        $results = $conn->query("SELECT * FROM tbl_admin WHERE email = '$emailpass'");
        $rows = $results->fetch_array();
        if($rows){
             $name = $rows['firstname'];            
            $password = $rows['password'];
           
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
            $mail->AddAddress($emailpass);
            $mail->addReplyTo('no-reply@gmail.com', 'No-reply');
            $mail->addCC($emailpass);
            $mail->addBCC($emailpass);  
            $mail->Subject = 'Password Recovery';
            // $mail->Body =  "<h4>Hey! $name, Thanks for your request, Here you password. Login to your acount and change to a new password .</h4><p>Password: $password </p><br><p>Thank you!</p>";
            $mail->Body="
                        <html>
                        <head>
                            <title></title>
                        </head>
                        <body>
                            <div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);border-radius: 5px;font-family:tahoma;width=50%'>

                                <div style='background-color: red;margin: 0;display: flex;flex-basis: 20%;justify-content:center;border-top-left-radius: 5px;border-top-right-radius: 5px;padding: 0.5em;'>

                                    
                                    <div>
                                        <center><p style='font-weight: bold;color: white;font-size: 28px;'>St. Cecilia's College Cebu-Inc.</p></center>
                                    </div>
                                </div>

                                <div style='padding:1.5e m'>
                                    <h4>Hey! $name, Thanks for your request, Here your password. Login to your acount and change to a new password .</h4><p>Password: <span style='color: red'>$password</span> </p><br><p>Thank you!</p>
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

                $mail->send();
                header("Location: index.php?error=successRequest");
                exit();

            }else{
                header("Location: index.php?error=emailNotFound");
                exit();


            }

            
    

   ?>

    

    