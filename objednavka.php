<?php
$jmeno = $_POST["jmenoprijmeni"];
$adresa = $_POST["adresa"];
$cislo = $_POST["cislo"];
$email = $_POST["email"];
$poznamka = $_POST["poznamka"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/PPFavicon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
    </style>
    <link rel="stylesheet" href="style.css">
    <title>Peterova Pizza</title>
</head>

<body>
    <header>
        <a href="index.html"><h1>Peterova pizza</h1></a>
        <a href="kosik.html"><img src="Images/Kosik.png"></a>
    </header>
    
    <h2>Objednávka č.143:</h2>
    <div class="php">
        <h3>Obsah objednáky</h3>
        <p><strong>Sýrová: 1</strong></p>
        <p><strong>Chili: 1</strong></p>
        <p><strong>Fanta: 2</strong></p>
        <h3>Info</h3>
        <p><strong>Jméno a příjmení:</strong> <?= htmlspecialchars($jmeno) ?></p>
        <p><strong>Adresa:</strong> <?= htmlspecialchars($adresa) ?></p>
        <p><strong>Telefonní číslo:</strong> <?= htmlspecialchars($cislo) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Poznámka:</strong> <?= htmlspecialchars($poznamka) ?></p>
    </div>

    <footer>
        <div class="footer_peter">
            <div class="footer_sloupec">
                <a href="akce.html">Akce</a>
                <a href="menu.html">Menu</a>
                <a href="napoje.html">Nápoje</a>
            </div>
            <div class="footer_sloupec">
                <a href="kosik.html">Košík</a>
                <a href="objednavani.html">Objednávání</a>
                <a href="nutricni_hodnoty.html">Nutriční hodnoty</a>
            </div>
            <div class="footer_sloupec">
                <a href="o_nas.html">O nás</a>
                <a href="kontakt.html">Kontakt</a>
                <a href="podminky.html">Podmínky použití</a>
            </div>
        </div>
        <p>Peterova Pizza 2026©</p>
    </footer>
</body>
</html>