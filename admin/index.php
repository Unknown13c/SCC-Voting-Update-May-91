  <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="shortcut icon" href="logo/scclogo.png">

    <title>SCC Online Voting</title>

    <!-- Bootstrap Core CSS -->
    <link href="mycss/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="mycss/sb-admin-2.css" rel="stylesheet">
    <link href="mycss/print.css" rel="stylesheet" media="print">
    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="mycss/style.css">


</head>

<body class="hold-transition login-page" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('../images/votingbacground.JPG'); background-size:cover;">
 <div class="container-mother">
   <div class="containers">
    <img src="../logo/newimg1.png"><span style="font-size: 26px; color: white;"></span>
   </div>

  <div class="container" >
      <a href="../index.php"><i class="fa fa-arrow-left btn pull-left"></i></a>
      <a href="index.php"><i class="fa fa-refresh btn pull-right"></i></a>
    <div class="panel-body">

            <form action="include/logins.inc.php" role="form" method = "post" enctype = "multipart/form-data" > 
 

                <h2><i class=" fa fa-user"></i> Admin | Sign In</h2>          
                    <div class="form-group">
                        <label for = "username" >Username</label>
                        <input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus>
                    </div>		
                    <div class="form-group">
                        <label for = "username" >Password</label>
                        <input class="form-control" placeholder="Enter Password" name="password" type="password" id="psw" >
                    </div>
                    <div class="form-group">
                         <input type="checkbox" onclick="myFunction()"><label>Show Password</label>
                    </div>
                     
                      <center>
                        <?php
                          if (isset($_GET["error"])){
                            if ($_GET["error"] == "emptyField") {
                             echo "<p style='color: red'>Fill all fields</p>";
                            }else if($_GET["error"] == "Wronglogin"){
                              echo "<p style='color:red'>Wrong username or password</p>";
                            }else if($_GET['error'] == "successRequest"){
                              echo "<p style='color:green'>Check your gmail account for your password recovery</p>";
                            }else if($_GET['error'] == "emailNotFound"){
                              echo "<p style='color:red'>Gmail not found</p>";
                            }                                
                          }

                         ?>
                      </center>         
                    <button class="btn-login " name = "login"><i class="fa fa-sign-in"></i> Sign In</button>
                      <p>Forgot password? <span>Click</span> <a href="" data-toggle="modal" data-target="#modalForm">here</a></p> 

              </form>
           
        </div>
    </div>
    </div>
   
    <script type="text/javascript">
  function page (src) {
    window.location = src;
  }
  </script>

  <script type="text/javascript">
        function myFunction() {
  var x = document.getElementById("psw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  }
</script>

<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">Password recovery</h3>
            </div>
            
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" action="recoverpass.php" method="get"  enctype = "multipart/form-data">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="forgotpass" placeholder="Please enter your email to recover your password...." required />
                    </div>
               
                <button style="color: white; border-radius: 3px; border: none !important; background-color: red; padding: 0.5em;
        " type="submit" class="btn-primary ">Submit</button>
                <button style="border: none;" type="button" class=" btn-secondary " data-dismiss="modal">Close</button>
              
                </form>
            </div>
            <div class="modal-footer">
            </div>

        </div>
    </div>
</div>

  <?php 
  include ('script.php');

?>
</body>

</html>
