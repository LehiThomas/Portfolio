<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Teny Gasy Be</title>
    </head>
    <body>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/sidebar.php'; ?>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid" style="padding:0">
                    <div class="row-fluid">
                        <div class="col-lg-12" style="padding:0">
                            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-lg-8">
                            <a href="#menu-toggle" class="btn btn-success visible-xs" id="menu-toggle">Menu</a>
                            <h2>Tonga Soa!!</h2>                            
                            <img class="mada_pics_right" src="../images/river_sky.jpg" alt=""/>
                            <p>Welcome to the coolest place on Earth! Or at least a website
                                about the coolest place on Earth. <br> Besides the beautiful language
                                of Malagasy, here you can also learn all about the amazing history, people, 
                                plants and wildlife of the Red Island, Madagascar.</p>
                        </div>        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <!-- /#wrapper -->
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        <script src="../javascript/custom.js" type="text/javascript"></script>
    </body>
</html>

