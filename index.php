<?php
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- TITLE -->
    <title>PHP Strong Password Generator</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="./js/app.js" defer></script>
</head>

<body>
    <div class="container">
    <h1 class="my-5">Password Generator</h1>
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Genera una password!
                </div>
                <div class="card-body">
                    <form action="" method="GET" class="row">
                        <div class="col-9 mb-3">
                            <label for="password_length" class="mb-2">
                                Scegli la lunghezza della tua password:
                            </label>
                            <input type="number" class="form-control" id="password_length" name="password_length">
                        </div>

                        <div class="col-2 mb-3 position-relative">
                            <button type="button" class="btn btn-outline-primary w-100 position-absolute top-32 ms-4">Genera</button>
                        </div>
                    </form>

                    <?php
                        if (isset($_GET["password_length"])) {
                            $length = $_GET["password_length"];
                            $password = generatePassword($length);
                    
                            echo "La password generata automaticamente è: $password";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous">
    </script>
</body>

</html>