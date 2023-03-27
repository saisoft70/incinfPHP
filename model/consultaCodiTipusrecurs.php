<?php
function consultaCodiTipusrecurs($codi){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM tipusrecursinformatic WHERE codiTipusRecurs = ?');
    $statement->execute(array($codi));
    $arraybasededades = $statement->fetchAll();
    return $arraybasededades;
}
?>