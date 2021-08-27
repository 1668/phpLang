<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Maison Laffore</title>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-opacity-0">
            <div class="container-fluid">
                <a class="navbar-brand text-body" href="index.php">Logo</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
                <div class="collapse navbar-collapse callapsed" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item  d-flex justify-content-end">
                            <a class="nav-link text-dark" aria-current="page" href="index.php"><?php echo $lang['Home']?></a>
                        </li>
                        <li class="nav-item  d-flex justify-content-end">
                            <a class="nav-link active text-black-50" href="lodging.php"><?php echo $lang['Lodging']?></a>
                        </li>
                        <li class="nav-item  d-flex justify-content-end">
                            <a class="nav-link text-black-50" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
    <div class="container-fluid">
            <div class="row d-flex justify-content-end">
                <hr class="w-75 my-5">
            </div>
        </div>
        <div class="container">
            <div class="row m-5">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="display-1 animate__animated animate__fadeInDown">
                    <?php echo $lang['thanks']?>
                    </h1>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-12 d-flex justify-content-center">
                    <p class="text-center sous-titre animate__animated animate__fadeIn"><?php echo $lang['descriptionThanks']?></p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class="my-5 w-75">
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <p class="footer text-center"><?php echo $lang['footerMessage2']?></p>
                    <a href="index.php" class="footer text-center"><p><?php echo $lang['contact2']?></p>
                </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>