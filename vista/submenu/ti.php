<?php
session_start();
if (!(isset($_SESSION["IDLoguejat"]))){
    header('Location:./index.php');
}
if (($_SESSION["IDLoguejat"]) == 0){
    echo "<ul>";
    echo "<li>"."<a href='../../controlador/consultaTipusCodiIncidencies.php'>Consulta per codi</a>"."</li>";
    echo "<li>"."<a href='../../controlador/altaTipusIncidencies.php'>Alta tipus d'incidències</a>"."</li>";
    echo "<li>"."<a href='../menu.php'>Tornar al menú inicial</a>"."</li>";
    echo "</ul>";
}else{
    echo "<ul>";
    echo "<li>"."<a href='../../controlador/consultaTipusCodiIncidencies.php'>Consulta per codi</a>"."</li>";
    echo "<li>"."<a href='../menu.php'>Tornar al menú inicial</a>"."</li>";
    echo "</ul>";
}
?>