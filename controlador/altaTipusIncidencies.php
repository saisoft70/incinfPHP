<?php session_start();
if (!(isset($_SESSION["IDLoguejat"]))){
    header('Location:../index.php');
}
if ($_SESSION["IDLoguejat"] != 0){
    header('Location:../index.php');
}
include ("../vista/accions/altaTipusIncidencies.view.php");
include ("../model/altatipusIncidencies.php");
//Comprovo si hi s'ha fe tun POST, si s'ha fet un post, recorro tota la llista buscant si hi han coincidencies per la ID
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    altaTipusIncidencies($_POST["descripcio"]);
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>
