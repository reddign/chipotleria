<?PHP
session_start();
if (!isset($_SESSION["rice"])){
    $_SESSION["container"]="";
    $_SESSION["rice"]="";
    // Incase they are needed in the fututr
    $_SESSION["chese"]="";
    $_SESSION["meat"]="";
    $_SESSION["veggie"]="";
    $_SESSION["sauce"]="";
    $_SESSION["beans"]="";
    $container=$_SESSION["container"];
    $rice=$_SESSION["rice"];
    $cheese=$_SESSION["chese"];
    $meat=$_SESSION["meat"];
    $veggie=$_SESSION["veggie"];
    $sauce=$_SESSION["sauce"];
    $beans=$_SESSION["beans"];
}else{
    $container=$_SESSION["container"];
    $rice=$_SESSION["rice"];
    $cheese=$_SESSION["chese"];
    $meat=$_SESSION["meat"];
    $veggie=$_SESSION["veggie"];
    $sauce=$_SESSION["sauce"];
    $beans=$_SESSION["beans"];
}



?>

<script>
    let container = "<?PHP echo $container; ?>";
    let rice = "<?PHP echo $rice; ?>";
    let cheese = "<?PHP echo $cheese; ?>";
    let meat = "<?PHP echo $meat; ?>";
    let veggie = "<?PHP echo $veggie; ?>";
    let sauce = "<?PHP echo $sauce; ?>";
    let beans = "<?PHP echo $beans; ?>";

</script>