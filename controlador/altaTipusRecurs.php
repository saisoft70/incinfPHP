<?php session_start();
if (!(isset($_SESSION["IDLoguejat"]))){
    header('Location:../index.php');
}
if ($_SESSION["IDLoguejat"] != 0){
    header('Location:../index.php');
}
include ("../vista/accions/altaTipusRecurs.view.php");
include ("../model/altaTipusRecurs.php");
//Comprovo si hi s'ha fe tun POST, si s'ha fet un post, recorro tota la llista buscant si hi han coincidencies pel nom
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    altaTipusRecurs($_POST["name"]);
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>
