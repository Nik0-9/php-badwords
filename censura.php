<?php
$stringa = $_GET['stringa'];
$badWord = $_GET['badWord'];
$stringaCens = str_replace($badWord, '***', $stringa);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored</title>
</head>

<body>
    <p>
        Stringa:
        <?php
            echo $stringa;
        ?> <br>
        La stringa contiene:
        <?php
            echo strlen($stringa);
        ?> caratteri
    </p>
    <p>
        Stringa censurata:
        <?php
            echo $stringaCens;
        ?> <br>
        La stringa CENSURATA contiene:
        <?php
            echo strlen($stringaCens);
        ?> caratteri
    </p>
</body>

</html>