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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
                            <a class="nav-link text-black-50" aria-current="page" href="index.php"><?php echo $lang['Home']?></a>
                        </li>
                        <li class="nav-item  d-flex justify-content-end">
                            <a class="nav-link active text-dark" href="lodging.php"><?php echo $lang['Lodging']?></a>
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
        <!--  Gite n1 -->
        <div class="container-fluid photoPresentation" data-aos="fade-left" data-aos-easing="ease-in-back"
        data-aos-delay="800"
        data-aos-offset="0"
        data-aos-duration="900">
            <div class="row d-flex align-items-end justify-content-end">
                <div class="col-lg-4 offset-lg-1 col-md-4 col-12 verticale my-5">
                    <h3 class="titre"><?php echo $lang['Sartre']?></h3>
                    <p><?php echo $lang['descriptionLodgingSartre']?></p>
                    <a href="contact.php"><button type="button"
                            class="btn btn-outline-dark"><?php echo $lang['button']?></button></a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 my-5">
                    <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/JeanPaulSartre/frontHouse.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">1/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/JeanPaulSartre/kitchenpng.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">2/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/JeanPaulSartre/room.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">3/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/JeanPaulSartre/roomKids2.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">4/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/JeanPaulSartre/doubleRoom1.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">5/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/JeanPaulSartre/doubleRoom2.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">6/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/JeanPaulSartre/bathroom.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">7/7</h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-end">
                <hr class="w-75 my-5">
            </div>
        </div>
        <!--  Gite n2 -->
        <div class="container-fluid photoPresentation" data-aos="fade-right" data-aos-easing="ease-in-back"
        data-aos-offset="0"
        data-aos-duration="900">
            <div class="row d-flex align-items-end">
                <div class="col-lg-6 col-md-6 col-12 d-flex jusitify-content-start my-5">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/Beauvoir/gitesBeauvoir.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">1/4</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Beauvoir/beauvoirRoom.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">2/4</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Beauvoir/beauvoirKitchen.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">3/4</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Beauvoir/beauvoirBathroom.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">4/4</h5>
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
                <div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-12 verticale my-5">
                    <div class="row ms-3">
                        <h3 class="titre"><?php echo $lang['Beauvoir']?></h3>
                    </div>
                    <div class="row ms-3">
                        <p><?php echo $lang['descrptionLodgingBeauvoir']?></p>
                        <a href="contact.php"><button type="button"
                                class="btn btn-outline-dark"><?php echo $lang['button']?></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class="w-75 my-5">
            </div>
        </div>
        <!--  Maison -->

        <div class="container-fluid photoPresentation" data-aos="fade-left" data-aos-easing="ease-in-back"
        data-aos-offset="0"
        data-aos-duration="900">
            <div class="row d-flex align-items-end justify-content-end">
                <div class="col-lg-4 offset-lg-1 col-md-4 col-12 verticale my-5">
                    <h3 class="titre"><?php echo $lang['House']?></h3>
                    <p><?php echo $lang['descriptionLodgingHouse']?></p>
                    <a href="contact.php"><button type="button"
                            class="btn btn-outline-dark"><?php echo $lang['button']?></button></a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 my-5">
                    <div id="carouselExampleFade3" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/Maison/frontHouse.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">1/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/outsideTable.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">2/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/champagne.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">3/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/livingRoom1.jpg" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">4/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/livingRoom2.jpg" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">5/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/livingRoom3.jpg" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">6/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/roomDownstairs.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">7/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/decoration1.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">8/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/roomDownstairs2.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">9/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/bathroom.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">10/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/stairs.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">11/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/kennedyBathroom.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">12/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/kennedySuite2.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">13/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/kennedySuite1.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">14/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/roomUpstairs.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">15/16</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Maison/attic.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">16/16</h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class=" w-75 my-5">
            </div>
        </div>
        <!--  Studio -->
        <div class="container-fluid photoPresentation" data-aos="fade-right" data-aos-easing="ease-in-back"
        data-aos-offset="0"
        data-aos-duration="900">
            <div class="row d-flex align-items-end">
                <div class="col-lg-6 col-md-6 col-12 d-flex jusitify-content-start my-5">
                    <div id="carouselExampleCaptions3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/studio/frontHouse.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">1/4</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/studio/inside1.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">2/4</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/studio/inside2.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">3/4</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/studio/outside.png" class="img-fluid w-100" alt="Gers Location décor professionnel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">4/4</h5>
                                </div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-12 verticale my-5">
                    <div class="row ms-3">
                        <h3 class="titre"><?php echo $lang['Studio']?></h3>
                    </div>
                    <div class="row ms-3 ms-3">
                        <p><?php echo $lang['descriptionLodgingStudio']?></p>
                        <a href="contact.php"><button type="button"
                                class="btn btn-outline-dark"><?php echo $lang['button']?></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-end">
                <hr class="w-75 my-5">
            </div>
        </div>

        <!--  Domaine -->
        <div class="container-fluid photoPresentation" data-aos="fade-left" data-aos-easing="ease-in-back"
        data-aos-offset="0"
        data-aos-duration="900">
            <div class="row d-flex align-items-end justify-content-end">
                <div class="col-lg-4 offset-lg-1 col-md-4 offset-md-1 col-12 verticale my-5">
                    <div class="row ms-3">
                        <h3 class="titre"><?php echo $lang['Domain']?></h3>
                    </div>
                    <div class="row ms-3 ms-3">
                        <p><?php echo $lang['descpriptionLodgingDomain']?></p>
                        <a href="contact.php"><button type="button"
                                class="btn btn-outline-dark"><?php echo $lang['button']?></button></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 d-flex jusitify-content-start my-5">
                    <div id="carouselExampleCaptions5" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/Domaine/frontHouse.png" class="img-fluid w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">1/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Domaine/leftHouse.png" class="img-fluid w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">2/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Domaine/rigthHouse.png" class="img-fluid w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">3/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Domaine/gitesBeauvoir.png" class="img-fluid w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">4/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Domaine/outsidebanquet.png" class="img-fluid w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">5/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Domaine/pool.png" class="img-fluid w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">6/7</h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/Domaine/backyardStudio.png" class="img-fluid w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="textlight">7/7</h5>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions5"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions5"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <hr class="my-5">
            </div>
        </div>
        <div class="container-fluid fixed-bottom">
            <div class="row">
                <div class="offset-11 col-1 d-flex justify-content-around mb-2">
                <a href="lodging.php?lang=en">
                    <button type="button" class="btn btn-dark rounded-circle">EN</button>
                </a>
            </div>
            </div>
            <div class="row">
                <div class="offset-11 col-1 d-flex justify-content-around mb-3">
                <a href="lodging.php?lang=fr">
                    <button type="button" class="btn btn-dark rounded-circle">FR</button>
                </a>
            </div>
            </div>
        </div>
    </main>
    <!-- <footer>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <p class="footer text-center"><?php echo $lang['footerMessage']?></p>
                    <a href="contact.php" class="lien text-center"><p><?php echo $lang['contact']?></p>
                </a>
                </div>
            </div>
        </div>
    </footer> -->
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>