<!DOCTYPE html>
<html lang="hu">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/angels.css">
    <script src="js/main.js"></script>
    <title>Harcosok Klubja Állatmenhely</title>
    <link rel="icon" href="pictures/tabicons/husky.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>
</header>
<nav>
    <div id="navbar" class="topnav">
        <a href="index.php">Kezdőlap</a>
        <a id="active" href="angels.php">Védencek</a>
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
    <h1 id="vedench1">Védenceink</h1>
    <h2>Örökbefogadható védenceink</h2>
    <section>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/madzag.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/madzag.php" class="animalname">Madzag</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kutya</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kan</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Amerikai bulldog</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/molly1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/molly.php" class="animalname">Molly</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kutya</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Szuka</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Yorkshire terrier</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/picur1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/picur.php" class="animalname">Picúr</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kutya</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kan</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Keverék</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/axel1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/axel.php" class="animalname">Axel</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kutya</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kan</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Keverék</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>


        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/amy1.jfif" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/amy.php" class="animalname">Amy</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kutya</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Szuka</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="type">
                                </td>
                                <td>
                                    <a>Keverék</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/bella1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/Bella.php" class="animalname">Bella</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Kutya</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Szuka</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="type">
                                </td>
                                <td>
                                    <a>Keverék</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>

        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/barack1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/barack.php" class="animalname">Barack</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Macska</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Nőstény</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="type">
                                </td>
                                <td>
                                    <a>Eursz</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/americano1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/americano.php" class="animalname">Americano</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Macska</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Kandúr</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="type">
                                </td>
                                <td>
                                    <a>Európai rövidszőrű</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <h2>Állandó lakóink</h2>
    <section>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/vattacukor1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/vattacukor.php" class="animalname">Vattacukor</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Láma</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Nőstény</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/dinka1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/dinka.php" class="animalname">Dinka</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Róka</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Kan</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="type">
                                </td>
                                <td>
                                    <a>Európai vörös róka</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/trixi1.jpg" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/trixi.php" class="animalname">Trixi</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Őz</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Suta</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/type.svg" alt="type">
                                </td>
                                <td>
                                    <a>Európai őz</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
        <article>
            <div class="container">
                <div class="card">
                    <div class="image">
                        <img class="animaltabimg" src="pictures/animaltabs/libak1.png" alt="animalimg">
                    </div>
                    <div class="content">
                        <a href="animalpages/zlibak.php" class="animalname">Zefír/Zoé/Zaza</a>
                        <table style="text-align: center; width: 100%">
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/pawprint.svg" alt="pawn">
                                </td>
                                <td>
                                    <a>Libák</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img class="iconimg" src="pictures/icons/gender.svg" alt="gender">
                                </td>
                                <td>
                                    <a>Gácsér/Tojó</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
</body>
</html>