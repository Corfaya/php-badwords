<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Badwords PHP</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="" method="GET">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating">
                                <label for="paragaph">Scrivere qualcosa qui</label>
                                <textarea class="form-control" name="paragrafo"  id="paragaph"></textarea>
                            </div>
                        </div>
                        <div class="col-6 my-3">
                            <div class="form-group">
                                <label for="censored">Da censurare:</label>
                                <input type="text" class="form-control" name="bad_word" placeholder="Parola da censurare" id="censored">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger text-white fw-bolder">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>