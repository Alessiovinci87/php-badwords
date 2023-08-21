<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paragrafo = $_POST["paragrafo"];
        $parolaCensurata = $_POST["parola_censurata"];
        
        $paragrafoCensurato = str_ireplace($parolaCensurata, '***', $paragrafo);
        $lunghezzaParagrafoCensuratoEffettiva = strlen($paragrafoCensurato) - (3 * substr_count($paragrafoCensurato, '***'));
        
        echo "<h2>Paragrafo originale</h2>";
        echo "<p>" . $paragrafo . "</p>";
        echo "<p>Lunghezza: " . strlen($paragrafo) . " caratteri</p>";
        
        echo "<h2>Paragrafo censurato</h2>";
        echo "<p>" . $paragrafoCensurato . "</p>";
        echo "<p>Lunghezza effettiva: " . $lunghezzaParagrafoCensuratoEffettiva . " caratteri</p>";
    }
    ?>
</body>
</html>

