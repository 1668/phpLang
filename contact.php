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
            <div class="row">
                <hr class="my-5 space">
            </div>
        </div>
        <div class="container">
            <div class="row m-5">
                <div class="col-12  d-flex justify-content-center">
                    <p class="h3 titre"><?php echo $lang['SendMessage']?></p>
                </div>
            </div>
        </div>
        <form action="contactform.php" method="post">
        <div class="container">
            <div class="row d-flex justify-content-center my-3">
                <div class="col-6">
                        <label for="exampleFormControlInput1"
                            class="form-label textForm d-flex justify-content-center"><?php echo $lang['e-mail']?></label>
                        <input name=" e-mail" type="email" class="form-control border-0 textForm"
                            id="exampleFormControlInput1" placeholder="jean@example.com ...">
                </div>
            </div>
            <div class="row d-flex justify-content-center my-3">
                <div class="col-6">
                    <label for="exampleFormControlInput1"
                        class="form-label textForm d-flex justify-content-center"><?php echo $lang['profession']?></label>
                    <input name="profession" type="text" class="form-control border-0 textForm"
                        id="exampleFormControlInput1" placeholder="Photographe, cinéaste...">
                </div>
            </div>
            <div class="row d-flex justify-content-center my-3">
                <div class="col-6">
                    <label for="exampleFormControlTextarea1"
                        class="form-label textForm d-flex justify-content-center"><?php echo $lang['message']?></label>
                    <textarea name=" message" class="form-control border-0" id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center my-5">
            <div class="col-6 d-flex justify-content-center">
                <button type="submit" class="btn btn-outline-secondary" name="submit"><?php echo $lang['submit']?>
                </button>
            </div>
        </div>
        </form>
        <div class="container-fluid">
            <div class="row">
                <hr class="my-5 space">
            </div>
        </div>
        <div class="container-fluid fixed-bottom">
            <div class="row">
                <div class="offset-11 col-1 d-flex justify-content-around mb-2">
                <a href="contact.php?lang=en">
                    <button type="button" class="btn btn-dark rounded-circle">EN</button>
                </a>
            </div>
            </div>
            <div class="row">
                <div class="offset-11 col-1 d-flex justify-content-around mb-3">
                <a href="contact.php?lang=fr">
                    <button type="button" class="btn btn-dark rounded-circle">FR</button>
                </a>
            </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>