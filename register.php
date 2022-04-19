<?php // IDEA: egyszerű jelszavak letiltása ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
    <title>Harcosok Klubja Állatmenhely</title>
    <link rel="icon" href="pictures/tabicons/husky.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
    session_start();

    if(isset($_SESSION['username'])){
        header("Location: index.php");
    }
    ?>
</head>
<nav>
    <div id="navbar" class="topnav">
        <a href="index.php">Kezdőlap</a>
        <a href="angels.php">Védencek</a>
        <a href="programs.php">Programok</a>
        <a href="support.php">Támogatás</a>
        <a href="contact.php">Kapcsolat</a>
        <?php
        if(!isset($_SESSION['username'])){
            echo '<a href="login.php">Bejelentkezés</a>';
            echo '<a id="active" href="register.php">Regisztráció</a>';
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
      <body>
            <main>
                  <center>
                        <div class="textdiv" id="regdiv">
                            <form action="microservices/reg.inc.php" method="POST" autocomplete="on" enctype="multipart/form-data">
                                <label for="vnev">Felhasználónév*</label><br>
                                <input type="text" name="username" id=vnev required="" maxlength="100"><br>

                                <label for="pwd1">Jelszó*</label><br>
                                <input type="password" name="pwd1" id=pwd1 required="" minlength="8"><br>
                                <label for="pwd2">Jelszó megerősítése*</label><br>
                                <input type="password" name="pwd2" id=pwd2 required="" minlength="8"><br>
                                <label for="email">E-mail cím*</label><br>
                                <input type="email" name="email" id="email" placeholder="valaki@pelda.com"><br>

                                <label for="tszam">Telefonszám</label><br>
                                <input type="number" name="telefonszam" id="tszam" placeholder="+36201234567"><br>

                                <fieldset>
                                    <legend>Lakcím</legend>
                                    <label for="orszag">Ország</label><br>
                                    <input type="text" name="orszag" id="orszag" maxlength="50"><br>

                                    <label for="telepules">Település</label><br>
                                    <input type="text" name="telepules" id="telepules" maxlength="50"><br>
                                </fieldset>

                                <label for="megj">Személyes leírás: </label><br>
                                <textarea name="desc" id="megj" maxlength="1000" rows="5"></textarea><br>

                                <div class="checkbox-container">
                                    <label>
                                        <input type="checkbox" name="fhf" required>
                                        Elfogadom a <a class="link" href="https://www.youtube.com/watch?v=8rvqkwl8Iik">felhasználási feltételeket</a>.
                                    </label><br>
                                </div>

                                <p>* Kötelező mezők</p>

                                <input type="reset" name="visszaallitas" value="Adatok törlése">
                                <input type="submit" name="kuldes" value="Adomány küldése">
                            </form>
                        </div>
                  </center>
            </main>
      </body>
</html>
