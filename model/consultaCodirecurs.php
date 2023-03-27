<?php
function consultaCodirecurs($codi){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM recursinformatic WHERE codiRecurs = ?');
    $statement->execute(array($codi));
    $arraybasededades = $statement->fetchAll();
    return $arraybasededades;
}
?>