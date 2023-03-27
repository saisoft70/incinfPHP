<?php
session_start();
if (!(isset($_SESSION["IDLoguejat"]))){
    header('Location:./index.php');
}
if ($_SESSION["IDLoguejat"] == 0){
    echo "<ul>";
    echo "<li>"."<a href='../../controlador/consultaCodirecurs.php'>Consulta per codi</a>"."</li>";
    echo "<li>"."<a href='../../controlador/altaRecurs.php'>Alta de recurs</a>"."</li>";
    echo "<li>"."<a href='../menu.php'>Tornar al menú inicial</a>"."</li>";
    echo "</ul>";
}else{
    echo "<ul>";
    echo "<li>"."<a href='../../controlador/consultaCodirecurs.php'>Consulta per codi</a>"."</li>";
    echo "<li>"."<a href='../menu.php'>Tornar al menú inicial</a>"."</li>";
    echo "</ul>";
}
?>
