<?php

    include 'dbconnector/dbcon.php';
        $email = $_GET['inputEmail'];
        // echo $email;
        $results = $conn->query("SELECT * FROM voters WHERE email = '$email'");
        $rows = $results->fetch_array();
        if($rows){
             $name = $rows['firstname'];
            $idno = $rows['id_number'];
            $password = $rows['password'];
           
            require 'admin/sendmail/PHPMailer/PHPMailerAutoload.php';
            require 'admin/sendmail/constants.php';

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
            $mail->Subject = 'Request Feedback';
            // $mail->Body =  "<h4>Hey! $name, Thank for your request, use this account to vote.</h4><p> Username: $idNumber <br>Password: $password </p><br><p>Thank you!</p>";

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
                            <h4>Hey! $name, Thank for your request, use this account to vote.</h4><p> Username: $idno <br>Password: $password  </h4>
                        </div>

                        <form action='send_function.php' method='get' enctype='multipart/form-data'>
                            <input type='hidden' value='$idno' name='uname'>
                            <input type='hidden' value='$password' name='password'>

                            <button style='padding: 1em;width: 30%;cursor: pointer;font-size: 16px;font-weight: bold;background-color: #4B8B3B;border: none;border-radius: 5px;color: white;'>Vote Now</button>
                        </form>

                        <div>
                            <h4>Thank you fo using scc online voting system</h4>
                        </div>

                        <div>
                            <p>Note:* If you're having trouble clicking the 'Vote Now' button, copy and paste the username and password below into your web browser: <a href='sccvoting.epizy.com'>sccvoting.com</a> </p>
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
                header("Location: login.php?error=successRequest");
                exit();

            }else{
               
                header("Location: login.php?error=emailNotFound");
                exit();


            }

            
    

   ?>

    

    