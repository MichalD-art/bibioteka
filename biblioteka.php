<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="biblioteka.css">
</head>
<body>
    <header>
        <h1>Biblioteka w Książkowicach Małych</h1>
    </header>
    <section id="lewy">
        <h4>Dodaj czytelnika</h4>
        <form action="biblioteka.php" method="post">
            <label for="imie">imię: </label>
            <input type="text" id="imie" name="imie"><br>
            <label for="nazwisko">nazwisko: </label>
            <input type="text" id="nazwisko" name="nazwisko"><br>
            <label for="symbol">symbol: </label>
            <input type="text" id="symbol" name="symbol"><br>
            <input type="submit" value="AKCEPTUJ">
        </form>
        <!-- Efekt działania skryptu 1 -->
        <?php
        $servername = "localhost";
        $username = "root"
        $password = "";
        $dbname = "biblioteka"
        $conn = new mysqli($servername, $username, $password, $dbname)
        ?>
       
    </section>
    <section id="srodkowy">
        <img src="biblioteka.png" alt="biblioteka">
        <h6>ul.Czytelników 15&nbsp;; Książkowice Małe</h6>
        <p><a href="mailto:biuro@bib.pl">Czy masz jakieś uwagi?</a></p>
    </section>
    <section id="prawy">
        <h4>Nasi czytelnicy:</h4>
        <ol>
            <!-- Lista numerowana generowana za pomocą skryptu 2 -->
        </ol>
    </section>
    <footer>
        <p>Projekt witryny: [wstaw numer zdającego]</p>
    </footer>
</body>
</html>
