<?php

		require '../dbconnector/dbcon.php';

		
		if (isset($_POST['submit'])){
			$id_number = $_POST['id_number'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$prog_study = $_POST['prog_study'];
			$year_level = $_POST['year_level'];
			$date = date("Y-m-d H:i:s");
			function passFunc($len, $set=""){
				$gen = "";
				for($i = 0; $i < $len; $i++){
					$set = str_shuffle($set);
					$gen.=$set[0];
				}
				return $gen;
			}

			$genpass = passFunc(8, 'abcdefghijklmnopqrstuvqxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');

			include 'dbcon.php';
			$query = $conn->query("SELECT * FROM voters WHERE id_number = '$id_number'");
			$ress = $query->fetch_array();
			if($ress == 0){
				$conn->query("INSERT INTO `voters`(`id_number`, `firstname`, `lastname`, `email`, `gender`, `prog_study`, `year_level`, `status`, `date`, `password`, `status1`, `a_status`) VALUES ('$id_number','$firstname','$lastname','$email','$gender','$prog_study','$year_level','Unvoted','$date','$genpass','','Deactivated')");

				$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','New voters added')")or die($conn->error);
				header("Location: voters.php?error=votersAdded");
				exit();

			}else{

				
				echo "<script>window.location('voters.php?error=idExist')</script>";
				
			}
		}

		?> 

		<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
	function submitVoters(){
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var id_number = $('#id_number').val();
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var email = $('#email').val();
		var gender = $('#gender').val();
		var prog_study = $('#prog_study').val();
		var year_level = $('#year_level').val();
		
		if (id_number.trim() == '') {
			swal({
			  title: "Enter Student ID",
			  icon: "warning",
			});
			$('#id_number').focus();
			return false;
		}else if(firstname.trim() == ''){
			swal({
			  title: "Enter firstname",
			  icon: "warning",
			});
			$('#firstname').focus();
		}else if(lastname.trim() == ''){
			swal({
			  title: "Enter lastname",
			  icon: "warning",
			});
			$('#lastname').focus();
		}else if(email.trim() != '' && !reg.test(email)){
			swal({
			  title: "Enter valid email",
			  icon: "warning",
			});
			$('#email').focus();
		}else if(prog_study.trim() == ''){
			swal({
			  title: "Select Department",
			  icon: "warning",
			});
			$('#prog_study').focus();
		}else if(gender.trim() == ''){
			swal({
			  title: "Select gender",
			  icon: "warning",
			});
			$('#gender').focus();
		}else{
			$.ajax({
				type: 'POSt',
				url:
			})

		}

				
	}
</script> -->

<!-- 
<script>
function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();
    var message = $('#inputMessage').val();
    if(name.trim() == '' ){
        alert('Please enter your name.');
        $('#inputName').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Please enter your email.');
        $('#inputEmail').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Please enter valid email.');
        $('#inputEmail').focus();
        return false;
    }else if(message.trim() == '' ){
        alert('Please enter your message.');
        $('#inputMessage').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'submit_form.php',
            data:'contactFrmSubmit=1&name='+name+'&email='+email+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#inputName').val('');
                    $('#inputEmail').val('');
                    $('#inputMessage').val('');
                    $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script> -->