<?php
function altaTipusIncidencies($descripcio){
    require ("connexio.php");
    $statement = $connexio->prepare('INSERT INTO tipusincidenciesinfromatiques (descripcioIncidencia) VALUES (?)');
    $statement->execute(array($descripcio));
    $statement->fetchAll();
    echo "Tipus d'incidencia afegida amb exit! amb el codi ---> ";
    $statement = $connexio->prepare('select max(codiTipusIncidencies) as "id" from tipusincidenciesinfromatiques');
    $statement->execute();
    $arraybasededades = $statement->fetchAll();
    echo $arraybasededades[0]["id"];
}
