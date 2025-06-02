<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furrafia | Pustynia</title>
    <link rel="stylesheet" href="desert_style.css">
    <?php
        $server = "localhost";
        $user = "root";
        $conn = mysqli_connect($server, $user, "", "furrafia");
        $query = "SELECT * FROM kategorie";
        $wynik = mysqli_query($conn, $query);
    ?>
</head>
<body>
    <header class="title_sec">
        <h1>Furrafia</h1>
        <p class="wobbly">Podejmuj decyzje</p>
    </header>
    <main id="gra">
        <section class="sekcjaGry">
            <!--CELE GRY NP. WOJNY-->
            <section class="cele">
                
            </section>
            <section class="cele">

            </section>
            <section class="cele">

            </section>
        </section>
        <section class="sekcjaGry" style="overflow: hidden;">
            <!--KATEGORIE ULEPSZEŃ-->
            <?php
                while ($res = mysqli_fetch_array($wynik)) {
                    $id = $res["id"];
                    $nazwa = $res["nazwaKategorii"];
                    echo "<section class='kategorie'>";
                    echo "<form><button name='kategoria' value='$id' id='$nazwa'>$nazwa</button></form>";
                    echo "</section>";
                }
            ?>
            
        </section>
        <section class="sekcjaGry">
            <?php 
                $kategoria = isset($_GET['kategoria']) ? intval($_GET['kategoria']) : null;
                if ($kategoria !== null) {
                    $query = "SELECT * FROM ulepszenia JOIN kategorie ON kategorie.id = ulepszenia.idKategorii WHERE kategorie.id = $kategoria";
                    $wynik = mysqli_query($conn, $query);

                    while ($res = mysqli_fetch_array($wynik)) {
                            $idUlepszenia = $res['id'];
                            $ulepszenieNazwa = $res['nazwaUlepszenia'];
                            echo "<section class='ulepszenie'>";
                            echo "<form><input type='hidden' name='kategoria' value='$kategoria'><button name='ulepszenie' value='$idUlepszenia' id='$ulepszenieNazwa'>$ulepszenieNazwa</button></form>";
                            echo "</section>";
                    }
                }
            ?>
        </section>
        <section class="sekcjaGry">
            <?php
                $ulepszenie = isset($_GET['ulepszenie']) ? intval($_GET['ulepszenie']) : null;
                if ($ulepszenie !== null) {
                    $query = "SELECT * FROM ulepszenia WHERE id = $ulepszenie";
                    $wynik = mysqli_query($conn, $query);

                    $res = mysqli_fetch_array($wynik);
                    $idUlepszenia = $res['id'];
                    $ulepszenieNazwa = $res['nazwaUlepszenia'];
                    $idPrzycisku = $idUlepszenia."Ulepszenie";

                    echo "<section class='podglad'>";
                    echo "<form><button name='kupno' value='$idUlepszenia' id='$idPrzycisku'>ODBLOKUJ</button></form>";
                    echo "</section>";
                }
                $ulepszenie = isset($_GET['ulepszenie']) ? intval($_GET['ulepszenie']) : null;
                if ($ulepszenie !== null) {
                    $query = "SELECT * FROM ulepszenia WHERE id = $ulepszenie";
                    $wynik = mysqli_query($conn, $query);

                    $res = mysqli_fetch_array($wynik);
                    $idUlepszenia = $res['id'];
                    $ulepszenieNazwa = $res['nazwaUlepszenia'];
                    $idPrzycisku = $idUlepszenia."Ulepszenie";
                }
            ?>
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>