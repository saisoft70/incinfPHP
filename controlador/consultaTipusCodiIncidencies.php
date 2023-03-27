<?php
include ("../vista/consultes/consultaTipusCodiIncidencies.view.php");
session_start();
include ("../model/consultaTipusCodiIncidencies.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $consulta = consultaTipusCodiIncidencies($_POST["codi"]);
    if (!empty($consulta)) {
        echo "<h4>"."Codi de la incidencia---> " . "</h4>" . $consulta[0]['codiTipusIncidencia'];
        echo "<h4>"."Descripció de la incidencia---> " . "</h4>" . $consulta[0]['descripcioIncidencia'];
    }else {
        echo "No hi ha cap tipus d'incidencia amb aquest codi";
    }
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>

