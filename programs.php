<!DOCTYPE html>
<html lang="hu">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/programs.css">
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
        <a href="index.php">Kezdőlap</a>
        <a href="angels.php">Védencek</a>
        <a id="active" href="programs.php">Programok</a>
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
    <h1 class="center">Programok</h1>
    <div class="textdiv" id="top">
        <p>Menhelyünk külnböző programlehetőégeket kínál az állatos élményekre vágyó gyerekeknek és felnőtteknek.</p>
        <a class="gombok" href="#kseta">Közös sétáltatás</a><br>
        <a class="gombok" href="#szulinap">Szülinap</a><br>
        <a class="gombok" href="#tabor">Nyári tabor</a><br>
    </div>
    <div class="textdiv" id="kseta">
        <h2>Közös sétáltatás</h2>
        <p>A menhely Kocsis Lia kolléganőnk vezetésével közös sétákat szervez havonta kétszer, szombatoként.
            Amennyiben úgy gondolod, hogy kutyáddal szívesen csatlakoznátok a csapathoz a hónap első és harmadik
            szombatján pontban 10 órakkor indul a séta a menhely bejárata elől. Amennyiben jönnél, de valamilen okból
            késel, Liát eléred az alábbi telefonszámon: +36204570951.</p>
        <p>Ha szívesen részt vennél a közös sétán, de nincs kutyád, akkor is szívesen várunk, akár egyedül, akár egy
            menhelyi kutyával. Sajnos nem minden négylábúnk esett még át a teljes rehabilitáción, így van közülük olyan,
            akit nem adhatunk ki egy közös sétára, mert nem viseln jól a többi kutya jelenlétét.</p>
        <p>A közös séta
            <mark>külső helyszínen</mark>
            zajlik.
        </p>
        <p>A közös séta <strong>saját felelősség</strong>! Te felelsz a kutyádért és saját magadért!</p>
    </div>
    <div class="textdiv" id="szulinap">
        <h2>Szülinap</h2>
        <p>A menhelyen lehetőség nyílik születésnapi bulikat rendezni. Az alábbi csomgajaink körül biztosan megtalálod a
            neked tetszőt:</p>
        <table class="center">
            <tbody>
            <tr>
                <th id="tipus">Csomag típusa</th>
                <th id="alap">Alapok</th>
                <th id="torta">Torta</th>
                <th id="ajandek">Ajándékcsomag</th>
                <th id="ar">Ár</th>
            </tr>
            <tr>
                <td headers="tipus">Alap csomag</td>
                <td headers="alap" rowspan="3">Minden csomag tartalmazza egy zártkörű helyszín biztosítását a menhelyen
                    belül és a helyszín díszítésést.
                </td>
                <td headers="torta" colspan="2">-</td>
                <td headers="ar">5500 Ft</td>
            </tr>
            <tr>
                <td headers="tipus">Közepes csomag</td>
                <td headers="torta"> &#10004;</td>
                <td headers="ajandek">-</td>
                <td headers="ar">8000 Ft</td>
            </tr>
            <tr>
                <td headers="tipus">Nagy csomag</td>
                <td headers="torta" colspan="2"> &#10004;</td>
                <td headers="ar">12000 Ft</td>
            </tr>
            </tbody>
        </table>
        <p><strong>Részletekért érdeklődj telefonon vagy emailen!</strong></p>
    </div>
    <div class="textdiv" id="tabor">
        <h2>Nyári tabor</h2>
        <p>Nyáron a gyerekeket nagy szeretettel várjuk nyári táborunkba, ahol megismerkedhetnek az állattartás
            rejtelmeivel.
            A tábor választhatóan napközis vagy sátrazós. A gyerekek egy rengeteg meglepetés vendéggel is találkozhatnak
            és
            nagyon sok élménnyel gazdagodnak.</p>
        <p>A tábor időpontja: 2022. augusztus 24-27.</p>
        <p>A táborról részletesebbn <a  class="link" href="https://szin.org/">itt</a> olvashattok. Jelentkezni, pedig az alábbi
            jelenkezési lapon tudtok:</p>
        <form action="support.html" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="nev">Név*</label><br>
            <input type="text" name="nev" id=nev required maxlength="100"><br>

            <label for="bnev">Becenév</label><br>
            <input type="text" name="becenev" id=bnev maxlength="15"><br>

            <label for="nem">Nem*</label><br>
            <select name="nem" id="nem">
                <option value="lany" selected>Lány</option>
                <option value="fiu">Fiú</option>
            </select><br>

            <label for="szd">Születési dátum*</label><br>
            <input id="szd" type="date"><br>

            <label for="jtszam">Jelentkező telefonszáma</label><br>
            <input type="number" name="telefonszam" id="jtszam" placeholder="+36201234567"><br>

            <label for="sztszam">Szülő telefonszáma*</label><br>
            <input type="number" name="telefonszam" id="sztszam" required placeholder="+36201234567"><br>

            <label for="email">E-mail cím*</label><br>
            <input type="email" name="email" id="email" required placeholder="valaki@pelda.com"><br>

            <label for="iszam">Irányítószám*</label><br>
            <input type="number" name="iranyitoszam" id="iszam" required><br>

            <label for="telepules">Település*</label><br>
            <input type="text" name="telepules" id="telepules" required maxlength="50"><br>

            <label for="utca">Utca*</label><br>
            <input type="text" name="utca" id="utca" required maxlength="80"><br>

            <label for="hszam">Házszám*</label><br>
            <input type="number" name="hazszam" id="hszam" required><br>

            <label for="megj">Megjegyzés</label><br>
            <textarea name="megjegyzes" id="megj" maxlength="500" cols="25" rows="5" placeholder="pl. étel allergia,speciális igények"></textarea><br>

            <div class="checkbox-container">
                <label id="cblabel">
                    <input type="checkbox" name="fhf" required>
                    Elfogadom a <a class="link" href="https://szin.org/vilagsztarok-a-szinen/">táborkiírást</a> és az <a  class="link"
                        href="https://www.youtube.com/watch?v=UrGS9EARHRc">Általános Szerződési Feltételeket</a>.
                </label>
            </div>
            <p>* Kötelező mezők</p>
            <input type="submit" name="beadas" value="Jelentkezés beadása">
        </form>
    </div>

</main>
<footer>

</footer>
</body>
</html>