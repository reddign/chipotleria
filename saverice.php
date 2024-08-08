<?PHP
session_start();
$_SESSION["rice"]=$_GET["rice"];


header("location:topppings.php");