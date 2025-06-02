<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furrafia | Login</title>
    <link rel="stylesheet" href="login_style.css">
    <?php
        $server = "localhost";
        $user = "root";
        $conn = mysqli_connect($server, $user, "", "furrafia");
        
    ?>
</head>
<body>
    <header class="title_sec">
        <h1>Furrafia</h1>
        <p class="wobbly">Zaloguj się</p>
    </header>
    <main id="login">
        <form action="index.php" method="POST">
            <input type="text" name="nazwaUzytkownika" placeholder="Nazwa użytkownika...">
            <input type="password" name="haslo" placeholder="Haslo..."><br>
            <input type="submit" id="zaloguj">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $nazwaUzytkownika = $_POST["nazwaUzytkownika"];
            $haslo = $_POST["haslo"];
            if (isset($nazwaUzytkownika)) {

                $queryUzytkownicy = "SELECT * FROM uzytkownicy";
                $wynikUzytkownicy = mysqli_query($conn, $queryUzytkownicy);
                $res = mysqli_fetch_array($wynikUzytkownicy);
                if ($nazwaUzytkownika == $res["nazwaUzytkownika"] && $haslo == $res["haslo"]) {
                        
                } else {
                    $query = "INSERT INTO uzytkownicy (nazwaUzytkownika,haslo) VALUES ('$nazwaUzytkownika', '$haslo')";
                    $wynik = mysqli_query($conn, $query);
                }
            }
        }
        ?>
    </main> 
    <footer>
        
    </footer>
</body>
</html>