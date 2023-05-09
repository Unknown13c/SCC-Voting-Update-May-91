
<?php
	include 'dbconnector/dbcon.php';

		try {
				session_start();
				session_destroy();
				
						$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[pres_id]','$_SESSION[voters_id]')") or die($conn->error);
						$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[vp_id]',  '$_SESSION[voters_id]')") or die($conn->error);
						$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[sec_id]', '$_SESSION[voters_id]')") or die($conn->error);
						$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[tre_id]', '$_SESSION[voters_id]')") or die($conn->error);
						$conn->query("INSERT INTO `votes` VALUES('', '$_SESSION[aud_id]', '$_SESSION[voters_id]')") or die($conn->error);
						
						foreach($_SESSION['mmo_id'] as $row =>$mmo){

						$conn->query("INSERT INTO `votes` VALUES('', '$mmo', '$_SESSION[voters_id]')") or die($conn->error);
						}
						foreach($_SESSION['Sen_id'] as $row =>$Senat){
						
			
						$conn->query("INSERT INTO `votes` VALUES('', '$Senat',   '$_SESSION[voters_id]')") or die($conn->error);
						}

						$conn->query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[voters_id]'") or die($conn->error);


							$pres = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$_SESSION[pres_id]'")->fetch_array();
				            $pfirstname = $pres['firstname'];
				            $plastname = $pres['lastname'];
				            $pdepartment = $pres['department'];

				            $vpres = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$_SESSION[vp_id]'")->fetch_array();
				            $vfirstname = $vpres['firstname'];
				            $vlastname = $vpres['lastname'];
				            $vdepartment = $vpres['department'];

				            $sec = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$_SESSION[sec_id]'")->fetch_array();
				            $sfirstname = $sec['firstname'];
				            $slastname = $sec['lastname'];
				            $sdepartment = $sec['department']; 

				            $tres = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$_SESSION[tre_id]'")->fetch_array();
				            $tfirstname = $tres['firstname'];
				            $tlastname = $tres['lastname'];
				            $tdepartment = $tres['department']; 

				            $aud = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$_SESSION[aud_id]'")->fetch_array();
				            $afirstname = $aud['firstname'];
				            $alastname = $aud['lastname'];
				            $adepartment = $aud['department'];

				            $mmo = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$_SESSION[mmo_id]'")->fetch_array();
				            $mfirstname = $mmo['firstname'];
				            $mlastname = $mmo['lastname'];
				            $mdepartment = $mmo['department'];

				            $acenats = $conn->query("SELECT * FROM tbl_candidate WHERE candidate_id = '$_SESSION[Sen_id]'")->fetch_array();
				            $acnfirstname = $senats['firstname'];
				            $acnlastname = $senats['lastname'];
				            $acndepartment = $senats['department'];
							
			// start comment	            
				            // $query = $conn->query("SELECT * FROM voters WHERE voters_id = '$_SESSION[voters_id]'");
				            //   while ($row = $query->fetch_array()){
				            //     $email = $row['email'];
				            //   }
				            //   require 'admin/sendmail/PHPMailer/PHPMailerAutoload.php';
				            //   require 'admin/sendmail/constants.php';

				            //   $mail = new PHPMailer();
				            //   $mail->isSMTP();
				            //   $mail->SMTPAuth =true;
				            //   $mail->SMTPSecure='tls';
				            //   $mail->Host = 'smtp.gmail.com';
				            //   $mail->Port = 587;
				            //   $mail->IsHTML(true);
				            //   $mail->CharSet='UTF-8';
				            //   $mail->Username='studentcouncilorganiz@gmail.com';
				            //   $mail->Password='sco12345678';
				            //   $mail->SetFrom('studentcouncilorganiz@gmail.com', 'Student Council Organization');
				            //   $mail->AddAddress($email);
				            //   $mail->addReplyTo('no-reply@gmail.com', 'No-reply');
				            //   $mail->addCC($email);
				            //   $mail->addBCC($email);  
				            //   $mail->Subject = 'Student Council Organization Voting Feedback';
// end comment

				              // $mail->Body = "<h3>Thank you for your Cooperation on this Election.</h3>
				              //               <h4>These are the candidate you've vote.</h4>
				              //               <br>President: ".$pfirstname."&nbsp;".$plastname."&nbsp;".$pdepartment."
				              //               <br>Vice President: ".$vfirstname."&nbsp;".$vlastname."&nbsp;".$vdepartment."
				              //               <br>Secretary: ".$sfirstname."&nbsp;".$slastname."&nbsp;".$sdepartment."
				              //               <br>Treasurer: ".$tfirstname."&nbsp;".$tlastname."&nbsp;".$tdepartment."
				              //               <br>Auditor: ".$afirstname."&nbsp;".$alastname."&nbsp;".$adepartment."
				              //               <br>M.M.O: ".$mfirstname."&nbsp;".$mlastname."&nbsp;".$mdepartment."
				              //               <br>Peace Officer:".$pcfirstname."&nbsp;".$pclastname."&nbsp;".$pcdepartment."
				              //               <br>Activity Coordinator:".$acfirstname."&nbsp;".$aclastname."&nbsp;".$acdepartment."<br><br>You are now Voted<br><br>Thank you!";

// start comment
				            //   $mail->Body="
							// 			<html>
							// 			<head>
							// 			    <title></title>
							// 			</head>
							// 			<body>
							// 			    <div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);border-radius: 5px;font-family:tahoma;width=50%'>
							// 			        <div style='background-color: red;margin: 0;display: flex;flex-basis: 20%;border-top-left-radius: 5px;border-top-right-radius: 5px;padding: 0.5em;'>										          
							// 			            <div>
							// 			                <p style='font-weight: bold;color: white;font-size: 24px;'>St. Cecilia's College Cebu-inc.</p>
							// 			            </div>
							// 			        </div>
							// 			        <div style='padding:1.5em'>
							// 			            <h3>Thank you for your Cooperation on this Election.</h3>
							// 			        </div>
				            //   			        <h4>These are the candidate you've vote.</h4>
				            //   			        <p style='left: 10%'>
							// 				  	 <br>President: ".$pfirstname."&nbsp;".$plastname."&nbsp;".$pdepartment."
					        //                      <br>Vice President: ".$vfirstname."&nbsp;".$vlastname."&nbsp;".$vdepartment."
					        //                      <br>Secretary: ".$sfirstname."&nbsp;".$slastname."&nbsp;".$sdepartment."
					        //                      <br>Treasurer: ".$tfirstname."&nbsp;".$tlastname."&nbsp;".$tdepartment."
					        //                      <br>Auditor: ".$afirstname."&nbsp;".$alastname."&nbsp;".$adepartment."
					        //                      <br>M.M.O: ".$mfirstname."&nbsp;".$mlastname."&nbsp;".$mdepartment."
					        //                      <br>Peace Officer:".$pcfirstname."&nbsp;".$pclastname."&nbsp;".$pcdepartment."
					        //                      <br>Activity Coordinator:".$acfirstname."&nbsp;".$aclastname."&nbsp;".$acdepartment."<br>
					        //                      <br>You are now Voted<br><br>Thank you!
					        //                     </p>										        

							// 			    </div>

							// 			</body>
							// 		</html>
							// 		";
				            //   $mail->SMTPOptions = array(
				            //       'ssl' => [
				            //           'verify_peer' => false,
				            //           'verify_depth' => false,
				            //           'allow_self_signed' => false,
				            //           'verify_peer_name' => false
				            //       ]
				            //   );
// end comment
				              // if (!$mail->send()) {
				              //     echo 'Mailer Error: ' . $mail->ErrorInfo;

				              // }

				              		// $mail->send();
									header("location:thankyou.php");

		}
		catch (exception $e) {
			 echo $e->getMessage();
		}
		
?> 


