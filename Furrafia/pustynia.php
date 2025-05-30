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
            <section class="cele">

            </section>
            <section class="cele">

            </section>
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
                echo "<section class='kategorie'>";
                    
                echo "<section>";
            ?>
        </section>
        <section class="sekcjaGry">

        </section>
        <section class="sekcjaGry">

        </section>
    </main>
    <footer>

    </footer>
    <script src="script.js" defer></script>
</body>
</html>