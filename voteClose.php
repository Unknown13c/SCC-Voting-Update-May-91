<?php include ('head.php');

 include("sess.php");

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mycss/style3.css">
</head>
<body class="body" style="background-image: url(image/votingbacground.jpg);">
<?php include 'side_bar.php'; ?>
<div class="mother-vote" >
	<div class="voteclose">
		<h3>Sorry voting Session is close</h3>
		<p>Please contact admin<br>

			<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Message</button>
		</p>
		  <?php
    	if(isset($_GET["error"])){
    		if($_GET["error"] == "msgSent"){
    			echo "<center><h5 style='color: green'>Message  Sent</h5></center>";
    		}
    	}

    	?>

	</div>
</div>

<!-- modal contace admin -->
<div id="id01" class="modal">
	<div class="modal-content animate">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

    	<div class="form-group">
    		<label>Fullname</label><br>
      		<input class="form-control" type="text" placeholder="Enter your fulname" name="c_name" required>

    	</div>

   		<div class="form-group">
    		<label>Message</label><br>
      		<textarea class="form-control" name="message" placeholder="Enter your message" required></textarea>

    	</div>    
       </div>

    <div class="container">
      <button type="submit" name="sendMsg" >Send</button>
      
    </div>
  </form>
  </div>
</div>

<?php


		require_once 'dbconnector/dbcon.php';
			if (isset($_POST['sendMsg'])){
				$c_name = $_POST['c_name'];
				$message = $_POST['message'];
				$conn->query("INSERT INTO `tbl_messages`(`v_name`, `v_message`) VALUES ('$c_name', '$message')");
				header("Location: voteClose.php?error=msgSent");
				exit();

			}else{

			}
	

?>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>