<!DOCTYPE html>
<html lang="hu">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/animalpage.css">
    <script src="../js/main.js"></script>
    <title>Harcosok Klubja Állatmenhely</title>
    <link rel="icon" href="../pictures/tabicons/husky.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>

</header>

<?php include_once 'navbar.php' ?>
<main>
    <div id="maindiv">
        <div id="headerdiv">
            <div id="leftheaderdiv">
                <img class="animaltabimg" src="../pictures/animaltabs/dinka1.jpg" alt="animalimg">
            </div>
            <div id="rightheaderdiv">
                <a class="animalname">Dinka</a>
                <table style="text-align: center; width: 100%">
                    <tr>
                        <td>
                            <img class="iconimg" src="../pictures/icons/pawprint.svg" alt="pawn">
                        </td>
                        <td>
                            <a>Róka</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="iconimg" src="../pictures/icons/gender.svg" alt="pawn">
                        </td>
                        <td>
                            <a>Kan</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="iconimg" src="../pictures/icons/type.svg" alt="type">
                        </td>
                        <td>
                            <a>Európai vörös róka</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="contentdiv">
            <p>Dinkára egy erdész talált rá egy rókalyukban, amelyben teljesen egyedül volt. Ez már akkor nem volt valami biztató jel, de kollégánk várt, hátha visszajönnek érte, de 24 óra elteltével úgy döntött, hogy elhozza hozzánk, hátha nálunk még van esélye. Csodálatos orvosi csapatunknak köszönhetően az apróság életben maradt és nálunk nevelkedett. Emiatt pedig annyira emberhez szokott, hogy már nem lenne képes egyedül élni az erdőben.
                Dinka nagyon játékos, de közben félénk is, de amennyiben van időtök és ott töltötök hosszú perceket a kifutójánál egy idő után kimerészkedik és megismer benneteket.

            </p>
            <video controls src="../videos/foxvid.mp4"></video>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>