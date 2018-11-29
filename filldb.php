<?php

$dbc = mysqli_connect('localhost', 'spai_username', 'Ui874', 'spai_db2') or die ('Error verbinding');

$voornaam = 'test';
$tussenvoegsel = 'de';
$achternaam = 'database';
$mailadres = 'zomaar@niets.nl';
$query = "INSERT INTO nieuwsbrief VALUES (0, '$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";


for ($i = 0; $i < 10; $i++) {
    $result = mysqli_query($dbc, $query) or die ('Error query');
}
