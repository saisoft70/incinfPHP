<?php
function consultaCodiTecnic($codi){
    require ("connexio.php");
    $statement = $connexio->prepare('SELECT * FROM usuaris WHERE codiUsuari = ? AND tipusprivilegis = 2');
    $statement->execute(array($codi));
    $arraybasededades = $statement->fetchAll();
    return $arraybasededades;
}
?>
