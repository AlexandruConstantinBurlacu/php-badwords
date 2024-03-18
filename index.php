<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>
        Inserire il paragrafo o la parola da censurare:
    </h1>
    <form action="results.php" method="get">
        <div>
            <label for="paragraph">Paragrafo:</label>
            <textarea id="paragraph" name="paragraph" rows="4" cols="50"></textarea>
        </div>
        <div>
            <label for="word">Parola:</label>
            <input id="word" name="word" type="text" placeholder="Inserisci una parola">
        </div>
        <input type="submit" value="Vai alla prossima pagina">
    </form>
</body>
</html>