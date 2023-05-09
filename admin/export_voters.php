<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scc_votingsystem";


$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) { 
    die("Connection failed: " . $con->connect_error);
}
else
{

}

$DB_TBLName = "voters"; 
$filename = "votersFile";  
$file_ending = "xls";  

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t";

$sql="SELECT id_number, firstname, lastname, email, gender, department, year_level,birthdate, status, sy FROM voters"; 
$resultt = $con->query($sql);
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