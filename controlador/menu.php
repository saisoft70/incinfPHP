<?php
session_start();
if (!(isset($_SESSION["IDLoguejat"]))) {
    header('Location:../index.php');
}
//Guardo la ID del usuari
$usuari = $_SESSION["IDLoguejat"];
//Amb la id puc obtenir totes les dades que volguem
echo "<h1 color='red'>"."Benvingut ".$_SESSION["nomLlargUsuari"]."!"."</h1>";
//echo $_SESSION["IDLoguejat"];
?>
