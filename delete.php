<?php

$id = $_GET['id'];

$dbc = mysqli_connect('localhost', 'spai_username', 'Ui874', 'spai_db2') or die ('Error verbinding');

$query = "DELETE FROM nieuwsbrief WHERE id = '$id' ";
$result = mysqli_query($dbc, $query) or die ('Error delete');

// gebruiker terugsturen naar de pagina beheren
header ("Location: beheren.php");
