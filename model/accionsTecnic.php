<?php
function accionsTecnic($nAccio, $moviment){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM incidencies WHERE codiIncidencia = ? AND estatIncidencia = ?');
    $statement->execute(array($nAccio, 1));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        echo "No hi ha cap accio o aquesta ja esta tencada";
    }else{
        $statement = $connexio->prepare('INSERT INTO accions (codiIncidencia, accio) VALUES (?,?)');
        $statement->execute(array($nAccio, $moviment));
        echo "Moviment Afegit";
    }
}
?>