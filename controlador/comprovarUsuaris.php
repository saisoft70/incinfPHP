<?php
session_start();
//Recorro els usuaris i comprovo que existeix i deprès la seva password, si no trova res, t'avisa per pantalla
if (isset($_POST["submit"]) && isset($_POST["name"]) && isset($_POST["pass"])) {
    include ("./model/comprovarUsuaris.php");
    $resultat = comprovarUsuaris($_POST["name"], $_POST["pass"]);
    if(empty($resultat)){
        echo "Usuari o password incorrectes :(";
    }else{
        //print_r($resultat);
        $_SESSION["IDLoguejat"] = $resultat[0]["tipusPrivilegis"];

        $_SESSION["nomLlargUsuari"] = $resultat[0]["nomLlargUsuari"];
        header('Location: ./vista/menu.php');
    }
}
?>
