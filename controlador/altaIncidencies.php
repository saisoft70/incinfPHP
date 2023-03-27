<?php
include ("../vista/accions/altaIncidencies.view.php");
include ("../model/altaIncidencies.php");
session_start();
//Comprovo si hi s'ha fe tun POST, si s'ha fet un post, recorro tota la llista buscant si hi han coincidencies per la ID
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    altaIncidencies($_POST["estat"], $_POST["detalls"], $_POST["codirecurs"], $_POST["coditecnic"], $_POST["codiusuari"], $_POST["tipusIncidencia"]);
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>