<?php
include ("../vista/consultes/consultaCodiIncidencies.view.php");
session_start();
include ("../model/consultaCodiIncidencies.php");
if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $info = consultaCodiIncidencies($_POST["codi"]);
    if (!empty($info)){
            echo "<h4>" . "Codi de la incidencia ---> " . "</h4>" . $info[0]["codiIncidencia"];
            echo "<h4>" . "Estat de la incidencia ---> " . "</h4>" . $info[0]["estatIncidencia"];
            echo "<h4>" . "Detalls del problema d'incidencia ---> " . "</h4>" . $info[0]["detallsProblemaIncidencia"];
            echo "<h4>" . "Codi del recurs d'incidencia ---> " . "</h4>" . $info[0]["codiRecursIncidencia"];
            echo "<h4>" . "Codi del tècnic asignat " . "</h4>" . $info[0]["codiTecnicIncidencia"];
            echo "<h4>" . "Codi del usuari de la incidencia ---> " . "</h4>" . $info[0]["codiUsuariIncidencia"];
            echo "<h4>" . "Codi del tipus de la incidencia ---> " . "</h4>" . $info[0]["codiTipusIncidencies"]."<br>";
            $accions =accionsIncidencies($info[0]["codiIncidencia"]);
            if(!empty($accions)){
                print_r($accions);
                echo "<h4>" . "Accions de la incidencia ---> " . "</h4>";
                echo "<ul>";
                for ($i = 0; $i < sizeof($accions); ++$i) {
                        echo "<li>" . $accions[$i]['accio'] . "</li>";
                }
                echo "</ul>";
            }else{
                echo "<b>"."No hi han accions per aquesta Incidencia"."</b>";
            }
        }
}
echo "<ul>";
echo "<li>"."<a href='../vista/menu.php'>Tornar al menú inicial</a>"."</li>";
echo "</ul>";
?>