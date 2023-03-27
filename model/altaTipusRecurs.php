<?php
function altaTipusRecurs($nom){
    require ("connexio.php");
    $statement = $connexio->prepare('INSERT INTO tipusrecursinformatic (nomTipusRecurs) VALUES (?)');
    $statement->execute(array($nom));
    $statement->fetchAll();
    echo "Tipus de recurs afegit amb exit! amb el codi ---> ";
    $statement = $connexio->prepare('select max(codiTipusRecurs) as "id" from tipusrecursinformatic');
    $statement->execute();
    $arraybasededades = $statement->fetchAll();
    echo $arraybasededades[0]["id"];
}
?>
