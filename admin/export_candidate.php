<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scc_votingsystem";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error);
}
else
{

}

$DB_TBLName = "candidate"; 
$filename = "candidateFile";  
$file_ending = "xls";  

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t";

$sql="SELECT tbl_candidate.candidate_id, tbl_candidate.position,tbl_partylist.party, tbl_candidate.firstname, tbl_candidate.lastname, tbl_candidate.email, tbl_candidate.department, tbl_candidate.year_level, tbl_candidate.gender, tbl_partylist.year FROM tbl_candidate INNER JOIN tbl_partylist ON tbl_candidate.partylist_id = tbl_partylist.partylist_id WHERE status = 'approved' ORDER BY candidate_id"; 
$resultt = $conn->query($sql);

require_once 'session.php';
                   
$conn->query("INSERT INTO tbl_activitylogs(username, action) values ('$_SESSION[username]','Candidate file exported')")or die($conn->error);

while ($property = mysqli_fetch_field($resultt)) { 
    echo $property->name."\t";
}

print("\n");    

while($row = mysqli_fetch_row($resultt)) 
{
    $schema_insert = "";
    for($j=0; $j< mysqli_num_fields($resultt);$j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != "")
            $schema_insert .= "$row[$j]".$sep;
        else
            $schema_insert .= "".$sep;
    }
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";
}
?>