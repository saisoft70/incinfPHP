<?php
function tencarIncidencia($id){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM incidencies WHERE codiIncidencia = ? AND estatIncidencia = ?');
    $statement->execute(array($id, 1));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        echo "No hi ha cap accio o aquesta ja esta tencada";
    }else{
        $statement = $connexio->prepare('UPDATE incidencies SET estatIncidencia = ? WHERE codiIncidencia = ?');
        $statement->execute(array(0, $id));
        echo "Incidencia tencada";
    }
}
?>