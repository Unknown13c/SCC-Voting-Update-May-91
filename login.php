<?php include ('head.php');?>
<body >
 <?php include ('nav-bar1.php');?>

 <body class="hold-transition login-page" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('logo/background-abstract.jpg'); background-size:cover;">
 <div class="container-mother">
     <div class="container-1">
     <img src="logo/cast-vote.png">
   </div>
    <divd class="container">
        <div class="panel-body">

            <form action="login.inc.php" role="form" method = "post" enctype = "multipart/form-data" class="index-form"> 
                <center>
                  <img src="logo/scclogo.png" style="height: 1%; width: 7pc;">
                </center> 
              <div class="form-group">
    					 <label for = "username" style="color:white"><strong>Student ID:</strong> </label><br/>
    					<input class="form-control" placeholder="Enter Student ID" name="idno" type="text" autofocus required>
                    </div>
    				
                    <div class="form-group">
    					<label for = "username" style="color:white"><strong>Password:</strong></label>
    					<input class="form-control" placeholder="Enter LastName Password!" name="password" type="password" id="psw" required>
                    </div>

                    <div class="form-group"style="color:white">
                        <input type="checkbox" onclick="myFunction()"><label> <strong>Show Password</strong></label>
                    </div> 

                    <center>
                     <?php 
                      if(isset($_GET['error'])){
                        if($_GET["error"] == "Voted"){
                          echo "<p style='color: red'>You can only Vote once</p>";
                        }else if($_GET["error"] == "wronglogin"){
                          echo "<p style='color: red'>Wrong username or password</p>";
                        }else if ($_GET["error"] == "emptyInput"){
                           echo "<p style='color: red'>Input fields</p>";
                        }else if($_GET["error"] == "successRequest"){
                          echo "<p style='color: green'>Check your gmail for your voting account</p>";
                        }else if($_GET["error"] == "emailNotFound"){
                          echo "<p style='color: red'>Your email was not registered in the system</p>";
                        }
                       
                    }

                     ?>
                     </center>
                      <button type="submit" class="btn-login" name = "login" ><i class="fa fa-sign-in"></i>Login</button>
                     <!--  <p>Register your email <span>Click </span><a href="" data-toggle="modal" data-target="#emailRequest">here</a></p> -->
                       <p style="color:white">Didn't recieve an account? <span>Click</span> <a href="" data-toggle="modal" data-target="#requestForm" style="text-decoration: none;">request</a></p>
                      <p style="color:white">Want to become a candidate? <span>Click</span> <a href="registercandidate.php" style="text-decoration: none;" >Register</a></p>



            </form>
             <a href="" data-toggle="modal" data-target="#helpVoters" style="text-decoration: none;">Help</a>

           </div>
     
                      <!-- ============================= -->
        </divd>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
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
  <!-- Modal for email request-->
<div class="modal" id="requestForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><strong>Request</strong></h4>
            </div>
            
            <div class="modal-body">
                <form role="form" action="requestpasscode.php" method="get"  enctype = "multipart/form-data">
                    <div class="form-group">
                        <label><strong>Email:</strong></label>
                        <input type="email" class="form-control" name="inputEmail" placeholder="Please enter your email for your voting account...." autofocus="true" required />
                    </div>               
                <button style="color: white; border-radius: 3px; border: none !important; background-color: red; padding: 0.5em;
        "  type="submit" class="btn-primary " style="border-radius: 3px;">submit</button>
                <button style="border: none;" type="button" class=" btn-secondary " data-dismiss="modal" style="border-radius: 3px;">Close</button>              
                </form>
            </div>
            <div class="modal-footer">
            </div>

        </div>
    </div>
</div> 


<!-- Help modal for vote -->
<div class="modal" id="helpVoters" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">Steps</h3>
        </button>
      </div>                                
      <div class="modal-body">


          <p style="font-size: 16px;">
            1. When you recieve an voting account from your gmail. <br>
            2. Copy the password and the username.<br>
            3. Paste it to the input field. <br>
            4. Click login to vote. <br>
            5. If voting account didn't recieve. <br>
            6. Click request and enter your gmail for your Voting accoun t. <br>
            7. If you want to run as candidate, click register. <br>
            Note*: You can only Vote once in this Election. Happy Voting..!
          </p>
          
      </div>
                  
      <div class="modal-footer">
        <button style="color: white; border-radius: 3px; border: none !important; background-color: red; padding: 0.5em;
        "  data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
      </div>
    </div>
  </div>  
</div>


  <?php include ('script.php');?>



</body>
