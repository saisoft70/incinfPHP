<?php
function consultaCodiIncidencies($codi){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM incidencies WHERE codiIncidencia = ?');
    $statement->execute(array($codi));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        echo "No hi ha cap incidencia amb aquest codi";
    }else{
        return $arraybasededades;
    }

}
function accionsIncidencies($codi){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM accions WHERE codiIncidencia = ?');
    $statement->execute(array($codi));
    $arraybasededades = $statement->fetchAll();
    return($arraybasededades);
}
?>
