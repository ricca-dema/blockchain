<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Riferimenti BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Riferimenti a file locali -->
    <link href="assets\css\global.css" rel="stylesheet">
    <link rel="icon" href="assets\media\nlogo2.png">

    <script src="assets\js\animations.js"></script>

    <title>Blockchain</title>
</head>

<body class="wallpaperAnimation text-center text-white" onload="fadeinOnLoad();">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

        <?php require "components/navbar.php"; ?>

        <main role="main" class="inner cover">
            <div class="titleUpDown p-0 m-0">
                <h1 class="invisible cover-heading" id="secondElement">Blockchain</h1>
            </div>
            <div class="invisible specs row" id="thirdElement">
                <div class="col">
                    <p class="lead" onclick="shake();">Cos’è</p>
                </div>
                <div class="col">
                    <p class="lead" onclick="shake();">Caratteristiche</p>
                </div>
                <div class="col">
                    <p class="lead" onclick="shake();">Utilizzi</p>
                </div>
            </div>
            <p class="invisible lead" id="fourthElement">
                <a href="pages\slides.php" class="btn btn-lg btn-outline-light" id="startButton">Iniziamo</a>
            </p>
        </main>

        <?php require "components/footer.php"; ?>

    </div>
    </div>
</body>

</html>