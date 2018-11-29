<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwsbrief inschrijven</title>
</head>
<body>
    <h1>NIEUWSBRIEF</h1>
    <h2>Inschrijven</h2>
    <a href="index.php">Klik hier voor de home</a><br>

    <form method="post" action="verwerk_inschrijving.php">
        <label>Voornaam:<input type="text" name="voornaam"/></label><br>
        <label>Tussenvoegsel: <input type="text" name="tussenvoegsel"/></label><br>
        <label>Achternaam: <input type="text" name="achternaam"/></label><br>
        <label>Email:<input type="email" name="mailadres"/></label><br>
        <input type="submit" name="submit" value="verzenden"/>
    </form>

</body>
