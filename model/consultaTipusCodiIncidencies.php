<?php
function consultaTipusCodiIncidencies($codi){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM tipusincidenciesinfromatiques WHERE codiTipusIncidencies = ? ');
    $statement->execute(array($codi));
    $arraybasededades = $statement->fetchAll();
    return $arraybasededades;
}
?>