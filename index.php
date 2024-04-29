<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bad Words</title>
</head>
<body>
    <h1>Bad Words</h1>
    <form action="censura.php" method="GET">
        <label for="stringa">Inserisci una frase:</label>
        <input type="text" name="stringa"> <br>
        <label for="badWord">Inserisci una parola da censurare:</label>
        <input type="text" name="badWord">
        <button type="submit">invia</button>
    </form>
    
</body>
</html>