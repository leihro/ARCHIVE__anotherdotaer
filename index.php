<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
    <title>Anotherdotaer</title>
    <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="_/css/custom.css">
</head>

<body id = "home">

    <!-- navigation -->
    <?php include("_/components/php/nav.php") ?>

    <!-- carousel -->
    <?php include("_/components/php/carousel.php") ?>   

<section class="container">

    <!-- header -->
    <header class = "row">
        <section class="col-md-12">
            <h1>My Dota Heros</h1>
        </section>
    </header>


    <!-- article/aside -->
    <div class = "row">
        <section class = "col-md-8">
            <?php include("_/components/php/article_intro.php") ?>  
            <hr>
            <div class="row">
                <?php include("_/components/php/article_thumbnails.php") ?>  
            </div>
        </section>

        <section class="col-md-4">
            <h3>Find More here</h3>
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
