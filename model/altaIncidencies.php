<?php
function altaIncidencies($estat, $detalls, $recursIncidencia, $codiTecnic, $codiUsuariIncidencia, $codiTipusIncidencies)
{
    require("connexio.php");
    $errors = [];
    $statement = $connexio->prepare('SELECT * FROM recursinformatic WHERE codiRecurs = ?');
    $statement->execute(array($recursIncidencia));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        $errors[] = "No hi ha cap codi Recurs relacionada";
    }
    $statement = $connexio->prepare('SELECT * FROM usuaris WHERE codiUsuari = ? AND tipusPrivilegis = 2');
    $statement->execute(array($codiTecnic));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        $errors[] = "No hi ha cap tecnic amb aquest codi";
    }
    $statement = $connexio->prepare('SELECT * FROM usuaris WHERE codiUsuari = ? AND tipusPrivilegis = 1');
    $statement->execute(array($codiUsuariIncidencia));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        $errors[] = "No hi ha cap usuari final amb aquest codi";
    }
    $statement = $connexio->prepare('SELECT * FROM tipusincidenciesinfromatiques WHERE codiTipusIncidencies = ?');
    $statement->execute(array($codiTipusIncidencies));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        $errors[] = "No hi ha cap codi de tipus d'incidencies amb aquest codi";
    }
    if (empty($errors)) {
        if ($estat == "on"){
            $estat = 1;
        }else{
            $estat = 0;
        }
        $statement = $connexio->prepare('INSERT INTO incidencies (estatIncidencia, detallsProblemaIncidencia, codiRecursIncidencia, codiTecnicIncidencia, codiUsuariIncidencia, codiTipusIncidencies) VALUES (?,?,?,?,?,?)');
        $statement->execute(array($estat, $detalls, $recursIncidencia, $codiTecnic, $codiUsuariIncidencia, $codiTipusIncidencies));
        $statement->fetchAll();
        echo "Incidencia afegida amb exit! amb el codi ---> ";
        $statement = $connexio->prepare('select max(codiIncidencia) as id from incidencies');
        $statement->execute();
        $arraybasededades = $statement->fetchAll();
        echo $arraybasededades[0]["id"];
    } else {
        //Si la variable $errors existeix significa que hi han errors
        //I printo els errors de l'array amb una llista desordenada
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li><b>$error </b></li>";
        }
        echo "</ul>";
    }
}


