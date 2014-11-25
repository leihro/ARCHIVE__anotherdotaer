<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "viewpoint" content = "width=device-width, initial-scale=1.0">
    <title>Anotherdotaer.contact</title>
    <link rel="stylesheet" type="text/css" href="_/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="_/css/custom.css">
</head>

<body id = "heroes" data-spy = "scroll" data-target = ".scrollspy">

    <!-- navigation -->
    <?php include("_/components/php/nav.php") ?>

    <?php include("_/components/php/heroes_jumbotron.php") ?>

<section class="container">
    
<!-- article/aside -->

    <div class = "row">

        <!-- scrollspy -->
        <section class = "col-md-2 hidden-sm hidden-xs">
            <?php include("_/components/php/heroes_scrollspy.php") ?>
        </section>

        <!-- content -->
        <section class = "col-md-6 col-sm-8">
            <?php include("_/components/php/heroes_details.php") ?>
        </section>

        <!-- aside -->
        <section class = "col-md-4 col-sm-4">
            <h3>Heroes List</h3>
            <?php include("_/components/php/aside_photogrid.php") ?>  
        </section>

        
    </div>

<!-- row 4: footer -->

    <?php include("_/components/php/footer.php") ?>

</section> <!-- end container -->


<!-- javascript -->

	<script type="text/javascript" src = "_/js/jquery.min.js"></script>
	<script type="text/javascript" src = "_/js/bootstrap.min.js"></script>
    <script type="text/javascript" src = "_/js/custom.js"></script>
</body>
</html>
