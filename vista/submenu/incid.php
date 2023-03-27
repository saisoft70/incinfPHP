<?php
session_start();
if (!(isset($_SESSION["IDLoguejat"]))){
    header('Location:./index.php');
}
if ($_SESSION["IDLoguejat"] == 0){
    echo "<ul>";
    echo "<li>"."<a href="."../../controlador/consultaCodiIncidencies.php".">Consulta per codi</a>"."</li>";
    echo "<li>"."<a href="."../../controlador/altaIncidencies.php".">Alta d'incidència </a>"."</li>";
    echo "<li>"."<a href="."../../controlador/tancarIncidencia.php".">Tancar incidència </a>"."</li>";
    echo "<li>"."<a href="."../../controlador/accionsTecnic.php".">Accions del tècnic </a>"."</li>";
    echo "<li>"."<a href='../menu.php'>Tornar al menú inicial</a>"."</li>";
    echo "</ul>";
}else{
    echo "<ul>";
    echo "<li>"."<a href="."'../../controlador/consultaCodiIncidencies.php'".">Consulta per codi</a>"."</li>";
    echo "<li>"."<a href="."../../controlador/altaIncidencies.php".">Alta d'incidència </a>"."</li>";
    echo "<li>"."<a href='../menu.php'>Tornar al menú inicial</a>"."</li>";
    echo "</ul>";
}
?>