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

<?php include_once '../navbar.php' ?>
<main>
    <div id="maindiv">
        <div id="headerdiv">
            <div id="leftheaderdiv">
                <img class="animaltabimg" src="../pictures/animaltabs/axel1.jpg" alt="animalimg">
            </div>
            <div id="rightheaderdiv">
                <a class="animalname">Axel</a>
                <table style="text-align: center; width: 100%">
                    <tr>
                        <td>
                            <img class="iconimg" src="../pictures/icons/pawprint.svg" alt="pawn">
                        </td>
                        <td>
                            <a>Kutya</a>
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
                            <img class="iconimg" src="../pictures/icons/type.svg" alt="pawn">
                        </td>
                        <td>
                            <a>Keverék</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="contentdiv">
            <p>Axel 1 éves szobatiszta, egyelőre ivaros kisfiú. Oltásokkal rendelkezik, chipje sajnos még nincsen.
                Emberekkel-kutyákkal az elmondottak alapján kijön, de jobb szeretnénk, ha egyedüli kutyaként tudna
                valahol dekkolni gazdásodásig. A chipet, az ivartalanítást, a szállítást, és minden felmerülő költséget
                vállalunk, és intézünk!
            </p>
        </div>
    </div>
</main>
<footer>

</footer>
</body>
</html>