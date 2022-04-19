<nav>
    <div id="navbar" class="topnav">
        <a href="../index.php">Kezdőlap</a>
        <a href="../angels.php">Védencek</a>
        <a href="../programs.php">Programok</a>
        <a href="../support.php">Támogatás</a>
        <a href="../contact.php">Kapcsolat</a>
        <?php
        if(!isset($_SESSION['username'])){
            echo '<a href="../login.php">Bejelentkezés</a>';
            echo '<a href="../register.php">Regisztráció</a>';
        }
        else{
            echo '<form action="../microservices/logout.inc.php" method="post">
                        <button style="cursor: pointer; font-size: 20px; vertical-align: super; background-color: #464646; border-style: none" type="submit" id="logout" name="logout"><a>Kijelentkezés</a></button>
                  </form>';
        }
        ?>
        <a href="javascript:void(0);" class="icon" onclick="navbarMobile()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</nav>