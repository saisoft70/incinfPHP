<?php
function altaUsuari($nom, $contrassenya, $nomLlarg, $cognoms, $mail, $telefon){
    require("connexio.php");
    $errors = [];
    $statement = $connexio->prepare('SELECT * FROM usuaris WHERE nomUsuari = ?');
    $statement->execute(array($nom));
    $arraybasededades = $statement->fetchAll();
    if ($arraybasededades) {
        $errors[] = "Ja hi ha un usuari amb aquest username";
    }
    if (empty($errors)){
        $statement = $connexio->prepare('INSERT INTO usuaris (nomUsuari, contrassenyaUsuari, nomLlargUsuari, cognomsUsuari, mailUsuari, telefonUsuari, tipusPrivilegis) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $statement->execute(array($nom, $contrassenya, $nomLlarg, $cognoms, $mail, $telefon, 1));
        $statement->fetchAll();
        echo "Usuari afegit amb exit! ";
        $statement = $connexio->prepare('SELECT codiUsuari FROM usuaris WHERE nomUsuari = ?');
        $statement->execute(array($nom));
        $arraybasededades = $statement->fetchAll();
        echo "La seva id serà ---> ".$arraybasededades[0]["codiUsuari"];
    }
    else {
            //Si la variable $errors existeix significa que hi han errors
            //I printo els errors de l'array amb una llista desordenada
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li><b>$error </b></li>";
            }
            echo "</ul>";
    }

}
