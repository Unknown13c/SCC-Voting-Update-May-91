<?php         // echo "".$voter."&nbsp; ".$lastname."";


                include '../dbconnector/dbcon.php';
                  $lastname =$_GET['lastname'];

                require 'sendallemail/PHPMailer/PHPMailerAutoload.php';
                require 'sendallemail/constants.php';
                $query = $conn->query("SELECT * FROM voters");
                $email = array();
                while ($row = $query->fetch_array()){
                    $email = $row['email'];

                    
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
                $mail->Subject = 'Student Council Organization Announcement';
                $mail->Body = "".$lastname."";

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
                                    <h4>$lastname</h4>
                                </div>

                                <div>
                                    <h4>Thank you!</h4>
                                </div>

                                <div>
                                    <p>Note:* If you want to vote or run as candidate just direct to scc website:<a href='sccvoting.epizy.com'>sccvoting.com</a> </p>
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
                    // echo 'Mailer Error: ' . $mail->ErrorInfo;
                    header("Location: dashboard.php?error=NoInternet");
                } else {
                    header("Location: dashboard.php?error=successfulynotify");
                }
                }

   
          
                 
                        
                
?>  
