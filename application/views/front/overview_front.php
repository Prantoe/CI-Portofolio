<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="20x20" href="<?php echo base_url('assets/plugins/images/ps1.png') ?>">
    <title>Portfolio - Pranto suwarno</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/front/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/front/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/front/vendor/simple-line-icons/css/simple-line-icons.css') ?>"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/front/css/stylish-portfolio.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
        <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="#page-top">Pranto Suwarno</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#page-top">Home</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#footer">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1">Pranto Suwarno</h1>

            <h3 class="mb-5">
                <em>Graphic designer / Web developer</em>
            </h3>

        </div>
        <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2>about me</h2>
                    <p class="lead mb-5">Hi, I'm a freelance graphic designer and web developer.
                        <a href="#"></a></p>
                    <a class="btn btn-dark btn-xl js-scroll-trigger"
                        href="<?php echo base_url() . 'front/download' ?>">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="content-section bg-primary text-white text-center" id="services">
        <div class="container">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Services</h3>
                <h2 class="mb-5">What We Offer</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-screen-smartphone"></i>
                    </span>
                    <h4>
                        <strong>Responsive</strong>
                    </h4>
                    <p class="text-faded mb-0">Looks great on any screen size!</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-pencil"></i>
                    </span>
                    <h4>
                        <strong>Redesigned</strong>
                    </h4>
                    <p class="text-faded mb-0">Freshly redesigned.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-like"></i>
                    </span>
                    <h4>
                        <strong>Favorited</strong>
                    </h4>
                    <p class="text-faded mb-0">Millions of users
                        <i class="fas fa-heart"></i>
                        your Design!</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-mustache"></i>
                    </span>
                    <h4>
                        <strong>Question</strong>
                    </h4>
                    <p class="text-faded mb-0">I gave you a few question.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->

    <section class="content-section" id="portfolio">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Portfolio</h3>
                <h2 class="mb-5">Recent Projects</h2>
            </div>

            <div class="row no-gutters">

                <?php foreach ($design as $ds) : ?>
                <div class="col-lg-4">
                    <a class="portfolio-item" href="#">
                        <span class="caption">
                            <span class="caption-content mb-5">
                                <h2 class="upper"><?php echo $ds->name ?></h2>
                                <p class="mb-0"><?php echo $ds->description ?></p>
                            </span>
                        </span>
                        <img class="img-fluid" src="<?php echo base_url('upload/design/' . $ds->image) ?>" alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- Call to Action -->
    <section class="content-section bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Contact me</h2>
            <a href="https://wa.me/6283894242852" class="btn btn-xl btn-success mr-4">Whatsapp</a>
            <a href="mailto: suwarnopranto@gmail.com" class="btn btn-xl btn-warning mr-4">E-mail</a>
            <a href="https://t.me/prantosoe" class="btn btn-xl btn-info mr-4">Telegram</a>

        </div>
    </section>



    <!-- Footer -->
    <footer class="footer text-center" id="footer">
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/prantosoearno"
                        placeholder="facebook">
                        <i class="icon-social-facebook"></i>
                    </a>

                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://twitter.com/Pranto03017330">
                        <i class="icon-social-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://www.instagram.com/pranto_soearno/">
                        <i class="icon-social-instagram"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white"
                        href="https://www.linkedin.com/in/pranto-suwarno-59b014165/">
                        <i class="icon-social-linkedin"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://dribbble.com/prantoe">
                        <i class="icon-social-dribbble"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://github.com/Prantoe">
                        <i class="icon-social-github"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright 2020&copy; Pranto</p>
        </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/front/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/front/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets/front/js/stylish-portfolio.min.js') ?>"></script>

</body>

</html>