

 <?php

 require '../dbconnector/dbcon.php';

if(isset($_POST['change-update'])){
  $currentpass = $_POST['currentpass'];
  $newpass = $_POST['newpass'];
  $newpass1 = $_POST['newpass1'];

  require_once 'include/functions.inc.php';

  if(emptyInput($currentpass, $newpass, $newpass1) !== false){
    header("location: changepass.php?error=emptyInput");
    exit();
  }

  $pass = $conn->query("SELECT * FROM tbl_admin")->fetch_array();
  $id = $pass['user_id'];
  $mypass = $pass['password'];
  // $passverify = password_verify($currentpass, $mypass);
  
  if($currentpass!== $mypass){ 
    header("Location: changepass.php?error=notmatch");
  }else if($newpass !== $newpass1){
    header("Location: changepass.php?error=retypepassword");
  }else{
    $conn->query("UPDATE tbl_admin SET password='$newpass' WHERE user_id = $id");
    $sql = $conn->query("SELECT * FROM tbl_activitylogs");
    $result = $sql->fetch_array();
    $conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$result[username]','Password Change')")or die($conn->error);
    header("Location: changepass.php?error=passwordsuccessfulychange");
  }



}



?>