<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'def_safety';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>DEF - Proctective </title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="https://w3learnpoint.com/cdn/jquery-picZoomer.css">
    <script type="text/javascript" src="js/jquery/jquery-2.2.4.min.js"></script>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <img src="img/core-img/DEF-Safety-logo.png" width="200px" style="position: absolute; top: 40%;">
        <div class="lds-ellipsis mt-15 ">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="pixel-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="pixelNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/DEF-Safety-logo.png" width="200"
                                alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="#">explore def & technical information</a>
                                        <div class="megamenu" style="border-bottom: none;">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="index.php?page=products">SAFETY BOOTS</a></li>
                                                <li><a href="index.php?page=products">S3 Safety Boot</a></li>
                                                <li><a href="index.php?page=products">S2 Safety Boot</a></li>
                                                <li><a href="index.php?page=products">S3 Safety Boot 3M THINSULATE</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="reflectivevests.php">REFLECTIVE VESTS</a></li>
                                                <li><a href="reflectivevests.php">Def ZIP</a></li>
                                                <li><a href="reflectivevests.php">Def HIVIZ</a></li>
                                                <li><a href="reflectivevests.php">Def EXEC</a></li>
                                                <li><a href="reflectivevests.php">Def FOR</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="gloves.php">SAFETY GOLVES</a></li>
                                                <li><a href="gloves.php">GLOVES NITRIL</a></li>
                                                <li><a href="gloves.php">GlOVES LATEX</a></li>
                                                <li><a href="gloves.php">GLOVES PU</a></li>
                                                <li><a href="gloves.php">GLOVES PVC</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="safetyeyes.php">SAFETY EYEWEAR</a></li>
                                                <li><a href="safetyeyes.php">Def Sport Clear</a></li>
                                                <li><a href="safetyeyes.php">Def Euro Clear</a></li>
                                                <li><a href="safetyeyes.php">Def Hawk</a></li>
                                            </ul>
                                            <div class="megamenu">
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="earmuffs.php">EARMUFFS</a></li>
                                                    <li><a href="earmuffs.php">Def 22 DB</a></li>
                                                    <li><a href="earmuffs.php">Def 27 DB</a></li>
                                                    <li><a href="earmuffs.php">Def 26 DB</a></li>
                                                </ul>
                                                <ul class="single-mega cn-col-4">
                                                    <li><a href="ppi.php">Other PPI</a></li>
                                                    <li><a href="earmuffs.php">Technical information</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <!-- Top Social Info -->
                                <form method="POST" name="procurar_dados">

                                    <div class="top-social-info ml-5">
                                        <input class="input" id="achar" name="procurar" type="text"
                                            placeholder="search.....">
                                        <a href="" id="btn-procurar" class="btn-search">
                                            <i class="fa fa-search"></i></a>
                                        <a href="index.php?page=cart">
                                        <i class="fa fa-shopping-cart">
                                        <span></span>
                                        </i></a>
                                    </div>
                                </form>
                            </div>
                            <!-- Nav End -->'
                        </div>
                    </nav>


                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
 
EOT;
}
// Template footer
function template_footer() {

echo <<<EOT
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0">
    <div class="container-fluid">
        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="single-footer-widget mb-100">
                    <!-- Footer Logo -->
                    <a href="index.html" class="footer-logo"><img src="img/core-img/DEF-Safety-logo.png" width="250" height="60" alt="DEF-Safety-logo"></a>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-md-9 col-lg-8 col-xl-7">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-sm-4">
                        <div class="single-footer-widget mb-100">
                            <h5 class="widget-title">Address</h5>
                            <p>Avenida das Forças Populares<br>
                                de Libertação de Moçambique (FPLM)<br>
                                No 1815
                                Maputo</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-sm-4">
                        <div class="single-footer-widget mb-100">
                            <h5 class="widget-title">Support</h5>
                            <p><i class="fa fa-phone"></i> +01 251 332 331</p>
                            <br>
                            <p><i class="fa fa-send"></i>costumers.info@def.co.mz</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-sm-4">
                        <div class="single-footer-widget mb-100">
                            <h5 class="widget-title">Social</h5>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="copywrite-content">
                        <!-- Copywrite Text -->
                        <p class="copywrite-text text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> DEF-safety boots All Rights Reserved

                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->


<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<!--<script src="js/jquery/jquery-3.5.1.min.js"></script>-->

 <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6" crossorigin="anonymous"></script>


<script type="text/javascript" src="js/plugins/zoomsl.min.js"></script>
<script type="text/javascript" src="mapshowhide.js"></script>
   


<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
<script src="js/zoom.js"></script>

<script type="text/Javascript">
    $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
               autoplay:true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        </script>


</body>

</html>
EOT;
}
?>