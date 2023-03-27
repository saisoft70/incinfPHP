<?php
include ("../vista/consultes/consultaCodiRecurs.view.php");
session_start();
include ("../model/consultaCodirecurs.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $recurs = consultaCodirecurs($_POST["codi"]);
    if (!empty($recurs)) {
        echo "<h4>"."Codi Recurs ---> "."</h4>".$recurs[0]['codiRecurs'];
        echo "<h4>"."Nom del tipus de recurs --->"."</h4>".$recurs[0]['recursCodiTipusRecurs'];
        echo "<h4>"."Nom Recurs---> "."</h4>".$recurs[0]['nomRecurs'];
        //print_r($usuaris);
    }else{
        echo "No es trova el recurs corresponent :c";
    }
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>

