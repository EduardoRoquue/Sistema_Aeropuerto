<?php
session_start();
?>

<?php require_once("includes/conection.php"); ?>
<?php include("includes/header.php"); ?>

<?php

if(isset($_SESSION["session_username"]))
{
    //echo "Session is set; //for testing purposes
    header("Location: intropage.php");
}

if(isset($_POST["login"]))
{
    if(isset($_SESSION["session_username"]) && !empty($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
//TODO: revisar esta wea
        $mysqli = new mysqli($host ="localhost", $username = "username", $password = "", $dbname = "usuarios");
        $sql = SELECT ID 
    }
}