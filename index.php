<!doctype html>
<html lang="fr">

<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Votre réussite est la nôtre">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- page title -->
    <title>MonPFE - Votre réussite est la nôtre !</title>

    <!-- Favicon -->
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">

    <!-- Styles / CSS -->
    <?php include('styles.php'); ?>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/9e4d98a90c.js" crossorigin="anonymous"></script>

    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Start Preloader Area-->
    <!-- <div class="preloader-area">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div> -->
    <!-- End Preloader Area-->

    <!-- Start header area -->
    <?php include('header.php'); ?>
    <!--End header area -->

    <!-- Start content area -->
    <?php include('banner.php'); ?>
    <?php include('about.php'); ?>
    <?php include('video.php'); ?>
    <?php include('service.php'); ?>
    <?php include('tech.php'); ?>
    <?php include('contact.php'); ?>
    <!--End content area -->

    <!-- Start footer area -->
    <?php include('footer.php'); ?>
    <!--End footer area -->

    <!--Scroll-up-->
    <a id="scroll-up"><i class="fa fa-angle-up"></i></a>

    <?php include('js.php'); ?>

</body>

</html>