<?php
include ("../vista/accions/accionsTecnic.view.php");
session_start();
include ("../model/accionsTecnic.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    accionsTecnic($_POST['codi'], $_POST['accio']);
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>