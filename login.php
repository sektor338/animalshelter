<!DOCTYPE html>
<html lang="hu">
<head>
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: index.php");
    }
    ?>
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
</head>
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
      <body>
            <main>
                  <center>
                        <div class="maindiv">
                              <form id="form" action="microservices/log.inc.php" autocomplete="on" method="post">
                                    <div id="bar">
                                          <h1 id="bara">Bejelentkezés</h1>
                                    </div>
                                    <div class="inputdiv">
                                          <input class="input" type="text" name="username" placeholder="username" required>
                                    </div>
                                    <div class="inputdiv">
                                          <input class="input" type="password" name="password" placeholder="password" required>
                                    <div class="inputdiv">
                                          <button id="login" type="submit" name="login">Bejelentkezés</button>
                                          <br>

                                    </div>
                              </form>

                        </div>

                  </center>
            </main>
      </body>
</html>






