<?php
//Destrueixo la sessió i obligo al usuari a tornar-se a loguejar
//session_destroy(); també elimino totes les taules
require ("connexio.php");
$statement = $connexio->prepare("DROP TABLE `accions`, `incidencies`, `recursinformatic`, `tipusincidenciesinfromatiques`, `tipusrecursinformatic`, `usuaris`");
$statement -> execute();
echo "Taules eliminades correctament";
?>
