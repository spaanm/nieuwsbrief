<?php

$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];


$id = $_GET['id'];
$dbc = mysqli_connect('localhost', 'spai_username', 'Ui874', 'spai_db2') or die ('Error verbinding');

$query = "UPDATE nieuwsbrief 
          SET voornaam = '$voornaam', tussenvoegsel = '$tussenvoegsel', achternaam = '$achternaam', mailadres = '$mailadres'
          WHERE id = '$id' ";

echo $query;

$result = mysqli_query($dbc, $query) or die ('Error delete');

// gebruiker terugsturen naar de pagina beheren
header ("Location: beheren.php");
