<?php

// 0. Uitlezen van de post array
$subject = $_POST['subject'];
$message = $_POST['message'];

// 1. Connectie maken met de database
$dbc = mysqli_connect('localhost', 'spai_username', 'Ui874', 'spai_db2') or die ('Error verbinding');

// 2. Kijken in database en mailadressen tevoorschijn halen
$query = "SELECT mailadres FROM nieuwsbrief";
$result = mysqli_query($dbc, $query) or die ('Error query');

// 3. Loopje waarin het bericht wordt verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar' . $row['mailadres'] . '<br>';
    // variabelen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: j.schmitz@ma-web.nl';
    mail($to, $subject, $message, $headers);
}

echo 'Klaar met verzenden';