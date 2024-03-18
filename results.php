<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $paragraph = $_GET['paragraph'];

    $word = $_GET['word'];

    $censored = str_replace($word, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dati-ricevuti</title>
</head>
<body>
    
    <div>
        <h2>
            Paragrafo iniziale
        </h2>
        <p>
            <?php

                echo $paragraph;

            ?>
        </p>
        <h3>
            Lunghezza Paragrafo: <?php echo strlen($paragraph); ?> caratteri.
        </h3>
    </div>
    <div>
        <h2>
            Parola Iniziale
        </h2>
        <p>
        <?php

            echo $word;

        ?>
        </p>
    </div>
    <div>
        <h2>
            Paragrafo Censurato:
        </h2>
        <p>
            <?php echo ($censored) ?>
        </p>
        <p>
            Lunghezza <?php echo strlen($censored) ?>
        </p>
    </div>
    

</body>
</html>