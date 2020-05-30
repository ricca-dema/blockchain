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
    <link href="\assets\css\global.css" rel="stylesheet">
    <link href="\assets\css\carousel.css" rel="stylesheet">
    <link rel="icon" href="\assets\media\nlogo2.png">

    <script src="\assets\js\animations.js"></script>

    <title>Slides</title>
</head>

<body class="wallpaperAnimation text-center text-white"onload="fadeinOnLoad();">
    <div class="slides-container d-flex h-100 p-3 mx-auto flex-column">

        <?php require $_SERVER['DOCUMENT_ROOT'] . "/components/navbar.php"; ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="invisible carousel-inner" id="thirdElement">
                <div class="carousel-item active">
                    <img src="\assets\slides\1.jpg" class="d-block w-100" alt="1">
                </div>
                <div class="carousel-item">
                    <img src="\assets\slides\2.jpg" class="d-block w-100" alt="2">
                </div>
                <div class="carousel-item">
                    <img src="\assets\slides\3.jpg" class="d-block w-100" alt="3">
                </div>
            </div>
            <a class="invisible carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" id="secondElement">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="invisible carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" id="fourthElement">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <?php require $_SERVER['DOCUMENT_ROOT'] . "/components/reference.php"; ?>

    </div>
</body>