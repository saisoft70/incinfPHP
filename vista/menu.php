<?php
include ("../controlador/menu.php");
//Printo el menú amb la seva corresponent referencia
echo "<ul>";
echo "<li>"."<a href='./submenu/pu.php'>Usuaris</a>"."</li>";
echo "<li>"."<a href='./submenu/pt.php'>Tècnics</a>"."</li>";
echo "<li>"."<a href='./submenu/tr.php'>Tipus de recursos</a>"."</li>";
echo "<li>"."<a href='./submenu/rec.php'>Recursos</a>"."</li>";
echo "<li>"."<a href='./submenu/ti.php'>Tipus d'incidències</a>"."</li>";
echo "<li>"."<a href='./submenu/incid.php'>Incidències</a>"."</li>";
echo "<li>"."<a href='../controlador/sortir.php'>Sortir</a>"."</li>";
echo "</ul>";
?>
