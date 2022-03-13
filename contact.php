<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
    <title>Harcosok Klubja Állatmenhely</title>
    <link rel="icon" href="pictures/tabicons/husky.png">
</head>
<body>
<header>

</header>
<?php
include "nav.php";
?>
<main>
    <form action="feldolgoz.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Regisztrációs adatok</legend>
            <label>Teljes név: <input type="text" name="full-name" size="25"/></label> <br/>
            <label>Felhasználónév: <input type="text" name="username" required/></label> <br/>
            <label>Jelszó: <input type="password" name="passwd" required/></label> <br/>
            <label>Jelszó ismét: <input type="password" name="passwd-check" required/></label> <br/>
            <label>Születési dátum: <input type="date" name="date-of-birth" min="1920-01-01"/></label> <br/>
            <label>E-mail: <input type="email" name="email" required/></label> <br/>
            <label>Felhasználói azonosító: <input type="number" name="user-id" value="12345" disabled/></label> <br/>
        </fieldset>

        <label for="education">Legmagasabb iskolai végzettség:</label>
        <select id="education">
            <option value="elementary">8 általános</option>
            <option value="highschool">Érettségi</option>
            <option value="university">Felsőfokú végzettség</option>
            <option value="other" selected>Egyéb</option>
        </select> <br/>

        Nem:
        <label for="op1">Férfi:</label>
        <input type="radio" id="op1" name="sex" value="m"/>
        <label for="op2">Nő:</label>
        <input type="radio" id="op2" name="sex" value="f"/>
        <label for="op3">Egyéb:</label>
        <input type="radio" id="op3" name="sex" value="other" checked/> <br/>

        Hobbik:
        <label for="hobby-1">Fotózás:</label>
        <input type="checkbox" id="hobby-1" name="hobby-1" value="photo"/>
        <label for="hobby-2">Főzés:</label>
        <input type="checkbox" id="hobby-2" name="hobby-2" value="cooking"/>
        <label for="hobby-3">Sorozatnézés:</label>
        <input type="checkbox" id="hobby-3" name="hobby-3" value="series"/> <br/>

        <label>Profilkép: <input type="file" name="profile-pic"/></label> <br/>
        <label for="introduction">Bemutatkozás (max. 200 karakter):</label> <br/>
        <textarea id="introduction" name="intro" maxlength="200"></textarea> <br/>

        <input type="reset" name="reset-btn" value="Adatok törlése"/>
        <input type="submit" name="submit-btn" value="Adatok elküldése"/>
    </form>
</main>
<?php
include "footer.php";
?>
</body>
</html>