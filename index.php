<!DOCTYPE html>
<html>
<head>
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Inserisci un paragrafo e una parola da censurare</h2>
    <form action="process.php" method="post">
        <label for="paragrafo">Paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo" rows="4" cols="50"></textarea><br><br>
        
        <label for="parola_censurata">Parola da censurare:</label>
        <input type="text" id="parola_censurata" name="parola_censurata"><br><br>
        
        <input type="submit" value="Invia">
    </form>
</body>
</html>
