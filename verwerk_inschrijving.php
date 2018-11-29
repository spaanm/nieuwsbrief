<?php

    // POST-ARRAY uitlezen
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $mailadres = $_POST['mailadres'];

    // DATA in database stoppen

        // STAP 1: verbinding maken met de database dbc=databaseconnectie
        $dbc = mysqli_connect('localhost', 'root', '', 'learning') or die ('Error verbinding');

        // STAP 2: opdracht (QUERY) schrijven voor de database
        $query = "INSERT INTO nieuwsbrief VALUES (0, '$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";

        // STAP 3: opdracht (QUERY) uitvoeren
        $result = mysqli_query($dbc, $query) or die ('Error query');

        // STAP 4: verbinding verbreken
        mysqli_close($dbc);

    // BEVESTIGEN dat data is toegevoegd aan database
    if ($result) {
        echo 'De volgende gegevens zijn toegevoegd aan de database:<br>';
        echo $voornaam . '<br>';
        echo $tussenvoegsel . '<br>';
        echo $achternaam . '<br>';
        echo $mailadres . '<br>';
    } else {
        echo 'Sorry, er is iets mis gegaan, probeer het opnieuw';
    }

