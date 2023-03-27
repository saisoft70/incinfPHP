<?php
function comprovarUsuaris($usuari, $password){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM usuaris WHERE nomUsuari = ? AND contrassenyaUsuari = ?');
    $statement->execute(array($usuari, $password));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        return false;
    }
        return $arraybasededades;
}

