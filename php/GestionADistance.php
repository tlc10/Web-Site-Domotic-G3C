<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="UTF-8">
        <title>Contrôle ton habitat à distance!</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style_a_distance.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="header_V.1.js"></script>
    </head>
    <?php include("../includes/header.php"); 
    
    ?>
    <body>
        <section id="service" class="service sections">
            <div class="container">
                <div class="heading text-center">
                    <h1>Contrôles...</h1>
                    <div class="separator"></div>
                </div>
                <div class="row">
                    <div class="wrapper">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-pencil"></i>
                                <a href="GestionEclairage.php"><h5>...les lumières</h5></a>
                                <div class="separator2"></div>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-camera-retro"></i>
                                <a href="GestionPositionVolets.php"><h5>...les volets</h5></a>
                                <div class="separator2"></div>
                            </div>
                        </div> 

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="service-item text-center">
                                <i class="fa fa-lightbulb-o"></i>
                                <a href="GestionTemperature.php"><h5>...la température</h5></a>
                                <div class="separator2"></div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>
    </body>
    <?php include("../includes/footer.php"); ?>
</html>
