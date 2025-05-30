<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furrafia | Początek</title>
    <link rel="stylesheet" href="furry_style.css">
</head>
<body>
    <header class="title_sec">
        <h1>Furrafia</h1>
        <p class="wobbly">Wybierz swój początek!</p>
    </header>
    <main>
        <section>
            <button onclick="poczatek('kosmos.html')"></button>
        </section>
        <section>
            <button onclick="poczatek('pustynia.html')"></button>
        </section>
    </main>
    <footer>
        <button onclick="przenies()">ROZPOCZNIJ</button>
    </footer>
    <script>
        var poczatekVar = "kosmos.html";
        function poczatek(a) {
            poczatekVar = a;
        }
        function przenies() {
            window.location.href=poczatekVar;
        }
    </script>
</body>
</html>