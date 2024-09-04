<?php
    $paragrafo = $_GET["paragrafo"];
    $bad_word = $_GET["bad_word"];
    $length = strlen($paragrafo);
    var_dump($paragrafo, $length)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bad Word</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mb-5">Benvenuto!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Il tuo testo:</h3>
                <em class="mt-2"><?php echo $paragrafo ?></em>
            </div>
            <div class="col-12">
                <h3 class="fs-4 mt-4">La lunghezza del tuo testo è pari a: <span class="fs-5 fw-bold d-inline text-danger"><?php echo $length ?></span></h3>
            </div>
        </div>
    </div>
</body>
</html>