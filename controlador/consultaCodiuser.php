<?php
include ("../vista/consultes/consultaCodiUser.view.php");
session_start();
include ("../model/consultaCodiuser.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuaris = consultaCodiUser($_POST["codi"]);
    if (!empty($usuaris)) {
        echo "<h4>" . "Codi Usuari---> " . "</h4>" . $usuaris[0]['codiUsuari'];
        echo "<h4>" . "Nom Usuari---> " . "</h4>" . $usuaris[0]['nomUsuari'];
        echo "<h4>" . "Nom LLarg Usuari---> " . "</h4>" . $usuaris[0]['nomLlargUsuari'];
        echo "<h4>" . "Cognoms Usuari---> " . "</h4>" . $usuaris[0]['cognomsUsuari'];
        echo "<h4>" . "Mail Usuari---> " . "</h4>" . $usuaris[0]['mailUsuari'];
        echo "<h4>" . "Telefon Usuari---> " . "</h4>" . $usuaris[0]['telefonUsuari'];
        echo "<h4>" . "Tipus de privilegi del Usuari---> " . "</h4>" . $usuaris[0]['tipusPrivilegis'];
        //print_r($usuaris);
    }else{
        echo "No es trova l'usuari corresponent";
    }
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>

