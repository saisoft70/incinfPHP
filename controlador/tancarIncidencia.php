<?php
include ("../vista/accions/tancarIncidencia.view.php");
session_start();
include ("../model/tancarIncidencia.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    tencarIncidencia($_POST["codi"]);
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>

