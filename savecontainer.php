<?PHP
session_start();
$_SESSION["container"]=$_GET["container"];


header("location:base.php");


