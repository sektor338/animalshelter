<!DOCTYPE html>
<html lang="hu">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/main.js"></script>
    <title>Harcosok Klubja Állatmenhely</title>
    <link rel="icon" href="pictures/tabicons/husky.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<nav>
    <div id="navbar" class="topnav">
        <a id="active" href="index.php">Kezdőlap</a>
        <a href="angels.php">Védencek</a>
        <a href="programs.php">Programok</a>
        <a href="support.php">Támogatás</a>
        <a href="contact.php">Kapcsolat</a>
        <?php
        if(!isset($_SESSION['username'])){
            echo '<a href="login.php">Bejelentkezés</a>';
            echo '<a href="register.php">Regisztráció</a>';
        }
        else{
            echo '<form action="microservices/logout.inc.php" method="post">
                        <button style="cursor: pointer; font-size: 20px; vertical-align: super; background-color: #464646; border-style: none" type="submit" id="logout" name="logout"><a>Kijelentkezés</a></button>
                  </form>';
        }
        ?>
        <a href="javascript:void(0);" class="icon" onclick="navbarMobile()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</nav>

<main>
    <div id="maindiv">
        <h1>Bemutatkozás</h1>
        <p>Hatalmas szeretettel üdvözlünk menhelyünk honlapján!<br>
            A Harcosok Klubja Állatmenhely 2021-ben nyitotta meg a kapuit a rászoruló állatok előtt.
            A pár fős vezetőségünk és gondozói csapatunk igyekszik segíteni azoknak a négy-, vagy akár kétlábúaknak,
            segítséget nyújtani, akiknek már rengeteget kellett küzdeniük ebben az életben.
            Menhelyünk folyamatos felújításon és bővítésen esik át, így jelenleg kis létszámmal működik, de nyitvatartási
            időben mindenkit sok szeretettel várunk a helyszín felfedezésére és védenceink megtekintésére.<br>
            Együtt az állatokért! 🐾 - a HaK csapata
        </p>
        <p><q>Az emberek többsége beszél az állatokhoz, de csak kevesen értik, mit is mondanak.</q><br>~Carol Bigley</p>
    </div>
</main>
</body>
</html>