<!DOCTYPE html>
<html lang="hu">
<head>
    <?php
    session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/support.css">
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
        <a href="angels.php">Védencek</a>
        <a href="programs.php">Programok</a>
        <a id="active" href="support.php">Támogatás</a>
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
    <h1 class="center">Támogatás és segítség</h1>
    <section class="textdiv" id="top">
        <p>Kedves Látogató!<br>Örülünk, hogy idekattintottál, ezzel pedig támogatni és segíteni szeretnéd a menhelyet,
            valamint munkánkat. Ezt az alábbi három módon teheted meg:</p>
        <a class="gombok link" href="#sétáltatás">Kutyasétáltatás</a><br>
        <a class="gombok link" href="#adományok">Adományozás</a><br>
        <a class="gombok link" href="#vof">Virtuális örökbefogadás</a><br>
    </section>
    <section class="textdiv" id="sétáltatás">
        <h2>Kutyasétáltatás</h2>
        <p>A menhelyre látogatóknak lehetőségük nyílik a bentlakó kutyusok sétáltatására. Ezzel javíthanak védenceink
            mentális és fizikai egészségén miközben köteléket tudnak kialakítani.
            Minden kedvencünknek saját felszerelése (nyakörve és póráza) van, így azokat a helyszínen biztosítjuk.
            A sétáltatás menhelyünkön engedélyköteles, melyet egy a helyszínen történő rövid szóbeli felmérést követően
            lehet megszerezni.</p>
            <p><strong>Figyelem!</strong> 16 éven aluliak csak felnőtt kisérettel sétáltathatnak kutyát!<br>
            A sétáltatáshoz előzetes bejelentkezés nem szükséges, az alábbi időpontok bármelyikében sok szeretettel
            várunk Benneteket:</p>
        <table>
            <tbody>
            <tr>
                <td>Hétfő</td>
                <td>14:00-18:30</td>
            </tr>
            <tr>
                <td>Kedd</td>
                <td>13:00-18:00</td>
            </tr>
            <tr>
                <td>Szerda</td>
                <td>14:00-20:00</td>
            </tr>
            <tr>
                <td>Csütörtök</td>
                <td>Nincs lehetőség a sétáltatásra.*</td>
            </tr>
            <tr>
                <td>Péntek</td>
                <td>14:00-18:30</td>
            </tr>
            <tr>
                <td>Hétvége</td>
                <td>10:00-18:00</td>
            </tr>
            </tbody>
        </table>
        <p>*Csütörtökön a kutyusok kutyakiképzésen vesznek részt, hogy ideálisabb családi házikedvencek lehessenek és ez
            eléggé lefárasztja őket mentálisan és fizikailag is, ahhoz, hogy ne legyen szükségük sétáltatásra.
            Megértéseteket köszönjük!</p>
    </section>
    <section  class="textdiv" id="adományok">
        <h2>Adományozás</h2>
        <p>Menhelyünket anyagilag is tudod támogatni a következő számlaszámon: 10402283-22802398-70140000, <br>
        valamint adód 1%-ával az alábbi adószámon: 18015676-1-41.<br>
        Ezen kívül lehetőséged van résztvenni az <strong>Őrangyal</strong> programnban, mely megkönnyíti az utalást, vagy akár rendszeressé is teheted azt.</p>

        <div>
            <form action="support.html" method="POST" autocomplete="off" enctype="multipart/form-data">
                <label for="penz">Összeg*</label><br>
                <select name="penz" id="penz">
                    <option value="1000">1000 Ft</option>
                    <option value="2000" selected>2000 Ft</option>
                    <option value="5000">5000 Ft</option>
                    <option value="10000">10000 Ft</option>
                </select><br>

                <label for="vnev">Vezetéknév*</label><br>
                <input type="text" name="vezeteknev" id=vnev required="" maxlength="50"><br>

                <label for="knev">Keresztnév*</label><br>
                <input type="text" name="keresztnev" id="knev" required="" maxlength="50"><br>

                <label for="email">E-mail cím*</label><br>
                <input type="email" name="email" id="email" placeholder="valaki@pelda.com"><br>

                <label for="tszam">Telefonszám</label><br>
                <input type="number" name="telefonszam" id="tszam" placeholder="+36201234567"><br>

                <fieldset>
                    <legend>Lakcím</legend>
                    <label for="orszag">Ország</label><br>
                    <input type="text" name="orszag" id="orszag" maxlength="50"><br>

                    <label for="iszam">Irányítószám</label><br>
                    <input type="number" name="iranyitoszam" id="iszam"><br>

                    <label for="telepules">Település</label><br>
                    <input type="text" name="telepules" id="telepules" maxlength="50"><br>

                    <label for="utca">Utca</label><br>
                    <input type="text" name="utca" id="utca" maxlength="80"><br>

                    <label for="hszam">Házszám</label><br>
                    <input type="number" name="hazszam" id="hszam"><br>
                </fieldset>

                <label for="megj">Megjegyzés (max. 500 karakter): </label><br>
                <textarea name="megjegyzes" id="megj" maxlength="500" rows="5"></textarea><br>

                <div class="checkbox-container">
                    <label>
                        <input type="checkbox" name="fhf" required>
                        Elfogadom a <a class="link" href="https://www.youtube.com/watch?v=8rvqkwl8Iik">felhasználási feltételeket</a>.
                    </label><br>
                    <label>
                        <input type="checkbox" name="rszu" checked>
                        Havi rendszerességgel utalok.
                    </label><br>
                </div>

                <p>* Kötelező mezők</p>

                <input type="reset" name="visszaallitas" value="Adatok törlése">
                <input type="submit" name="kuldes" value="Adomány küldése">
            </form>
        </div>
        <p>Az anyagi támogatáson kívül tárgyi adományokat is elfogadunk, amik a lenti listában lesznek felsorolva.
            Az adományokat elkülhetitek postán vagy nyitvatartási időben elhelyezhetitetk a portán.
            Ezekről pontos adatokat a <a class="link" href="contact.html">Kapcsolat</a> oldalon.</p>
        <ul>
           <li>pokrócok</li>
           <li>általános fetőtlenítőszerek</li>
           <li>száraz kutya és macskatáp</li>
           <li>kölyöktáp</li>
           <li>kullncsriasztó csepp</li>
           <li>gyógyszerek (részletekért érdeklődj nálunk a <a class="link" href="contact.html">Kapcsolat</a> oldalon találod )</li>
           <li>kutyapelenka</li>
           <li>állatjátékok</li>
           <li>etetőtálkák</li>
           <li>póráz és nyakörv</li>
           <li>macskaalom</li>
           <li>póráz és nyakörv</li>
        </ul>
        <p><strong>Figyelem! NEM </strong>tudunk használni például szőnyegeket, matracokat, kis méretű rongyokat, gyerekruhákat; semmit, ami láthatóan piszkos, szőrös, stb. Csak és kizárólag tiszta, jó nedvszívó rongyokat (ágynemű, törölköző, pamut póló, lepedő, stb.) tudunk használni a kórházban állataink alá. Kérjük, csak olyasmit hozzatok, amit Ti is beraknátok saját állatotok alá. Gyakran kapunk felszedett, piszkos szőnyegeket, nylon és csipkefüggönyöket, gyerekruhákat, stb, melyeket nem tudunk használni és szemétként való elszállításuk jelentős költséget jelent. A pehelypaplanokat a kutyusok pár perc alatt széttépik és órákig kell takarítani utánuk, így sajnos a paplanokat sem tudjuk használni.</p>
    </section>
    <section class="textdiv" id="vof">
        <h2>Virtuális örökbefogadás</h2>
        <p>Amennyiben nem teheted meg, hogy örökbefogadd valamelyik védencünket, de egyikük nagyon megtetszett számodra, részt vehetsz a virtuális örökefogadó programban.
        Ebben az esetben két időtartam  közül választva (fél év/egy év), havi 1000 Ft-tal támogathatod a kiszemelt állatot.
        Amennyiben igényt tartasz rá az állatról havonta összefoglaló jelentést, amelyben követheted a fejlődését és amely képeket is tartalmaz róla.
        Ha virtuális örökbefogadottad valódi otthonra lel, azonnal értesítünk, és a fennmaradó összegről dönthetsz, hogy
        egy újabb védencünk kapja vagy az egész menhelyet támogatod vele. Ha élnél ezzel a lehetőséggel,
        írj nekünk egy email-t a kiszemelt állat nevével és persze a saját adataiddal (név, e-mail cím, telefonszám),
        emellt jelezd, hogy milyen formában kívánod támogatni választottad (banki átutalás/személyesen az irodában).
        Ha mindennel megvagy, egy <strong>oklevelet állítunk ki</strong> a virtuális öökbefogadásodról. <br>
        Az elérhetőségeinket a <a class="link" href="contact.html">Kapcsolat</a> oldalon találod.</p>
    </section>


</main>
</body>
</html>