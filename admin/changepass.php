<?php include ('head.php');?>

<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row"><br><br>
                <div class="col-lg-12"></div>
                  <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
                <div class="panel ">
                  <div class="panel-heading">
                   <h3> <i class="fa fa-key"></i> Password Property</h3>
                  </div>    
                </div>
              </h4>
              <div class="panel-body">
                            <div class="table-responsive">
                            <div class="span6" id="form-login">
                   <form action="password_property.php" method = "post" enctype = "multipart/form-data">  
         
            <div class="form-group">
                   <?php
                  if(isset($_GET['error'])){
                    if($_GET['error'] == "notmatch"){
                      echo "<p style='color: red'>Current password didnt match</p>";
                    }else if($_GET['error'] == "retypepassword" ){
                      echo "<p style='color: red'>New Password didnt match</p>";
                    }else if($_GET['error'] == "emptyInput" ){
                      echo "<p style='color: red'>Fill all fields</p>";
                    }else if($_GET['error'] == "passwordsuccessfulychange"){
                      echo "<p style='color: green'>Password change successfuly</p>";
                    }
                  }
                ?>

                <label>Current Password</label><br>
                <input class="form-control" type="password" name="currentpass" placeholder="Enter current password">
            </div>

            <div class="form-group">
                <label>New Password</label>
                <input class="form-control" type="password" name="newpass" placeholder="Enter new password" id="psw" class="demoInputBox" onKeyUp="checkPasswordStrength();">
                <div id="password-strength-status"></div>
            </div>
                <script>
                    function checkPasswordStrength() {
                        var number = /([0-9])/;
                        var alphabets = /([a-zA-Z])/;
                        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
                        if ($('#psw').val().length < 8) {
                            $('#password-strength-status').removeClass();
                            $('#password-strength-status').addClass('weak-password');
                            $('#password-strength-status').html("Weak (should be atleast 8 characters.)");
                            $('#password-strength-status').css("color", "red");
                        } else {
                            if ($('#psw').val().match(number) && $('#psw').val().match(alphabets) && $('#psw').val().match(special_characters)) {
                                $('#password-strength-status').removeClass();
                                $('#password-strength-status').addClass('strong-password');
                                $('#password-strength-status').html("Password is Strong");
                                $('#password-strength-status').css("color", "green");
                            } else {
                                $('#password-strength-status').removeClass();
                                $('#password-strength-status').addClass('medium-password');
                                $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
                                $('#password-strength-status').css("color", "blue");
                            }
                        }
                    }
                </script>
            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="newpass1" placeholder="Confirm password" id="psw1" onKeyUp="matchPassword();">
                <div id="newpasswordId"></div>
            </div>
            <script type="text/javascript">
              function matchPassword(){
                if($("#psw").val()!== ($("#psw1").val())){
                    $('#newpasswordId').html('<font color="red">Your password does not match</font>');
                    $("#psw1").focus();

                    return false;
                }else{
                    $('#newpasswordId').html('<font color="green">Your password match</font>');
                   

                    return false;
                }
              }

            </script>
            <div class="form-group">
                <input type="checkbox" onclick="myFunction()"><label>Show Password</label>
            </div>

            <div class="form-group">
                <input style="width: 10%" class="btn btn-info" type="submit" name="change-update" value="Save">
                <a href="user.php"  style="width: 10%"class="btn btn-info " >Cancel</a>

            </div>


      
          
        </form>  
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include ('script.php');?>

</body>

</html>

