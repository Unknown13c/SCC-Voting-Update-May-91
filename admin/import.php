<?php include ('session.php');?>

<?php
$conn = mysqli_connect("localhost", "root", "", "scc_votingsystem");

if (isset($_POST['submit'])) {
	$filename=$_FILES["filename"]["tmp_name"];
		 if($_FILES["filename"]["size"] > 0){

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE){
	        
	         	$id_number = $emapData[0];
	         	$firstname = $emapData[1];
	         	$lastname = $emapData[2];
	         	$email = $emapData[3];
	         	$gender = $emapData[4];
	         	$department = $emapData[5];
	         	$year_level = $emapData[6];
	         	$birthdate = $emapData[7];
	         	$school_year= $emapData[8];
	         	// $voted = $emapData[7] ;
	         	// $id_number = $emapData[8];

	           $sql = "INSERT into voters (`id_number`, `firstname`, `lastname`,`gender`,department, `year_level`, `birthdate`, `status`, school_year, password) 
	            	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','Unvoted','$emapData[7]','$emapData[8]')";
	          $result = mysqli_query( $conn, $sql );
	          $voter = "UPDATE voters SET a_status = 'Deactivated'";
			  $results = $conn->query($voter);


				if(!$result ){
					header("Location: importFile.php?error=fileInvalid");
					exit();				
				}
	         }
	         fclose($file);
	        $sql1 = $conn->query("SELECT * FROM tbl_activitylogs");
			$result = $sql1->fetch_assoc();
			$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$result[username]','File Import')")or die($conn->error);	
	         header("Location: voters.php?error=uploaded");
			exit();
			mysqli_close($conn);  	
			
		 }elseif(empty($filename)) {
			header("Location: importFile.php?error=UploadFile");
			exit();
			}

}


?>
<!-- 
    while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {

        $company_name = $emapData[0];

        // checking
        // get ID from tbl_company and insert as foreign key in tbl_customer
        $sql_LID = "SELECT * FROM tbl_company WHERE company_name = '$company_name'";
        $res_LID = mysql_query($sql_LID);


        if(mysql_num_rows($res_LID) <= 0) {
            // if does not exist
            // Insert company name into company table
            $sql_comp = "INSERT into tbl_company(company_name) values ('$company_name')";
            mysql_query($sql_comp);   
            $lastID = mysql_insert_id();

        } else {
            $row_LID = mysql_fetch_array($res_LID);
            $lastID = $row_LID['id'];
        }


        // insert company id and customer name into table customer
        $sql_cust = "INSERT into tbl_customer(comp_id,customer_name) values ('$lastID', '$emapData[1]')";
        mysql_query($sql_cust);


    }
    fclose($file);
    echo 'CSV File has been successfully Imported';
    header('Location: index.php');
} -->
