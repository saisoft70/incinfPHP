<?php
function altaRecurs($codiRelacionat, $nom){
    require("connexio.php");
    $errors = [];
    $statement = $connexio->prepare('SELECT * FROM tipusrecursinformatic WHERE codiTipusRecurs = ?');
    $statement->execute(array($codiRelacionat));
    $arraybasededades = $statement->fetchAll();
    if (empty($arraybasededades)) {
        $errors[] = "No hi ha cap codi recurs";
    }
    if (empty($errors)) {
        $statement = $connexio->prepare('INSERT INTO recursinformatic (recursCodiTipusRecurs, nomRecurs) VALUES (?,?)');
        $statement->execute(array($codiRelacionat, $nom));
        $statement->fetchAll();
        echo "Recurs informaatic afegit amb exit amb codi ---> ";
        $statement = $connexio->prepare('select max(codiRecurs) as id from recursinformatic');
        $statement->execute();
        $arraybasededades = $statement->fetchAll();
        echo $arraybasededades[0]["id"];
    }else {
        //Si la variable $errors existeix significa que hi han errors
        //I printo els errors de l'array amb una llista desordenada
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li><b>$error </b></li>";
        }
        echo "</ul>";
    }

}
