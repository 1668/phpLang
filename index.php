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
                <hr class="space my-5">
            </div>
        </div>
        
        <!--  section1 -->
        <div class="container">
            <div class="row m-5">
                <div class="col-12 d-flex justify-content-center">
                    <h1 class="display-1 animate__animated animate__fadeInDown">
                        Maison Laffore
                    </h1>
                </div>
            </div>
            <div class="row m-5">
                <div class="col-12  d-flex justify-content-center">
                    <p class="h3 sous-titre animate__animated animate__fadeIn"><?php echo $lang['Welcome']?></p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class="my-5 w-75">
            </div>
        </div>
        <!--  section2 -->
        <div class="container-fluid">
            <div class="row d-flex align-items-end">
                <div class="col-lg-6 col-md-6 col-12 my-5">
                    <img src="assets/Maison/houseSide1.jpg" class="img-fluid w-100" alt="Gers Location décor professionnel">
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-12 verticale my-5">
                    <div class="row">
                        <h3 class="titre"><?php echo $lang['Story']?></h3>
                    </div>
                    <div class="row">
                        <p><?php echo $lang['StoryText']?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class="my-5 space">
            </div>
        </div>
        <!--  section3 -->
        <div class="container-fluid mt-5">
            <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide w-100 border-0" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/Maison/WhatsApp Image 2021-07-22 at 14.26.44 (1).jpeg"
                                class="img-fluid w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="titre"><?php echo $lang['House']?></h3>
                                <p><?php echo $lang['descriptionIndexHouse']?></p>
                                <h5 class="text-white-50">1/5</h5>
                                <a href="lodging.php"><button type="button" class="btn btn-outline-light">+
                                        Infos</button> </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/Beauvoir/gitesBeauvoir.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="titre"><?php echo $lang['Beauvoir']?></h3>
                                <p><?php echo $lang['descriptionIndexBeauvoir']?></p>
                                <h5 class="text-white-50">2/5</h5>
                                <a href="lodging.php"><button type="button" class="btn btn-outline-light">+
                                        Infos</button> </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/JeanPaulSartre/frontHouse.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="titre"><?php echo $lang['Sartre']?></h3>
                                <p><?php echo $lang['descriptionIndexSartre']?></p>
                                <h5 class="text-white-50">3/5</h5>
                                <a href="lodging.php"><button type="button" class="btn btn-outline-light">+
                                        Infos</button> </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/studio/frontHouse.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="titre"><?php echo $lang['Studio']?></h3>
                                <p><?php echo $lang['descriptionIndexStudio']?></p>
                                <h5 class="text-white-50">2/5</h5>
                                <a href="lodging.php"><button type="button" class="btn btn-outline-light">+
                                        Infos</button> </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/Domaine/path.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="titre"><?php echo $lang['Domain']?></h3>
                                <p><?php echo $lang['descriptionIndexDomain']?></p>
                                <h5 class="text-white-50">5/5</h5>
                                <a href="lodging.php"><button type="button" class="btn btn-outline-light">+
                                        Infos</button> </a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fluid fixed-bottom">
            <div class="row">
                <div class="offset-11 col-1 d-flex justify-content-around mb-2">
                <a href="index.php?lang=en">
                    <button type="button" class="btn btn-dark rounded-circle">EN</button>
                </a>
            </div>
            </div>
            <div class="row">
                <div class="offset-11 col-1 d-flex justify-content-around mb-3">
                <a href="index.php?lang=fr">
                    <button type="button" class="btn btn-dark rounded-circle">FR</button>
                </a>
            </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class="my-5 ">
            </div>
        </div>
    </main>
    <!-- <footer>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <p class="footer text-center"><?php echo $lang['footerMessage']?></p>
                    <a href="contact.php" class="footer text-center"><p><?php echo $lang['contact']?></p>
                </a>
                </div>
            </div>
        </div>
    </footer> -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>