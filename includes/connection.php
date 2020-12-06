<?php
require("constants.php");
$con= mysqli_connect($servername, $username, $password, $database);
//TODO: Revisar esta otra wea
if (!$con)
{ 
    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($con);
?>