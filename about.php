<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
    <title>Anotherdotaer.about</title>
    <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="_/css/custom.css">
</head>

<body id = "about">

    <!-- navigation -->
    <?php include("_/components/php/nav.php") ?>

    <?php include("_/components/php/about_jumbotron.php") ?>

<section class="container">

<!-- article/aside -->

    <div class = "row">
        <section class = "col-md-8 col-sm-4">
            <?php include("_/components/php/article_intro.php") ?>  
        </section>

        <section class = "col-md-4 col-sm-4">
            <?php include("_/components/php/aside_photogrid.php") ?>  
        </section>

    </div>

<!-- footer -->

    <?php include("_/components/php/footer.php") ?>


</section> <!-- end container -->


<!-- javascript -->


	<script type="text/javascript" src = "_/js/jquery.min.js"></script>
	<script type="text/javascript" src = "_/js/bootstrap.min.js"></script>
    <script type="text/javascript" src = "_/js/custom.js"></script>
</body>
</html>
