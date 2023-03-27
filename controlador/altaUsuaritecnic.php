<?php session_start();
if (!(isset($_SESSION["IDLoguejat"]))){
    header('Location:../index.php');
}
if ($_SESSION["IDLoguejat"] != 0){
    header('Location:../index.php');
}
include ("../vista/accions/altaUsuari.view.php");
include ("../model/altaUsuaritecnic.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    altaUsuaritecnic($_POST["name"],$_POST["pass"],$_POST["nomLlarg"],$_POST["cognoms"],$_POST["mail"],$_POST["telefon"]);
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>
