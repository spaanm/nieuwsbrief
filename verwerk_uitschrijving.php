<?php

// FORMULIER uitlezen
$mailadres = $_POST['mailadres'];
echo $mailadres;

// DATA in database stoppen

// STAP 1: verbinding maken met de database dbc=databaseconnectie
$dbc = mysqli_connect('localhost', 'root', '', 'learning') or die ('Error verbinding');

// STAP 2a:  QUERY selecteren uit  database
$query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres' ";

// STAP 3a:  QUERY uitvoeren - check mailadres kolom
$result = mysqli_query($dbc, $query) or die ('Error query select');

// tellen hoeveel regels we nu hebben
$number_of_rows =mysqli_num_rows($result);

// testen of er regels zijn en daar conclusies aan verbinden
if($number_of_rows == 0) {
    echo 'Helaas dit emailadres ' . $mailadres . ' zit niet in de database.<br>';
    echo '<a href="uitschrijven.php">Klik hier om het nog eens te proberen.</a><br>';
    exit();
} else {
    echo 'Hoera, het mailadres is gevonden in de database.<br>';
}

// STAP 2b:  QUERY verwijderen uit database
$query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres' ";
// STAP 3b:  QUERY uitvoeren - check mailadres
$result = mysqli_query($dbc, $query) or die ('Error query delete');


// STAP 4: verbinding verbreken
mysqli_close($dbc);

// BEVESTIGEN dat data is verwijderd uit de database
echo 'Het mailadres ' . $mailadres . ' is verwijderd uit de database.<br>';
echo '<a href="index.php">Klik hier voor de home</a><br>';


