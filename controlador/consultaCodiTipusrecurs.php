<?php
include ("../vista/consultes/consultaCodiTipusRecurs.view.php");
session_start();
include ("../model/consultaCodiTipusrecurs.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $consulta = consultaCodiTipusrecurs($_POST["codi"]);
    if (!empty($consulta)) {
        echo "<h4>"."Codi Recurs---> "."</h4>".$consulta[0]['codiTipusRecurs'];
        echo "<h4>"."Nom Recurs---> "."</h4>".$consulta[0]['nomTipusRecurs'];
    }else{
        echo "No s'ha trobat cap Tipus de Recurs amb aquesta ID! "."<br> 👉👈";
    }
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>

