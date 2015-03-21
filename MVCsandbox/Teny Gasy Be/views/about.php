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
                        <div class="col-lg-1"></div>
                        <div class="col-lg-8">
                            <a href="#menu-toggle" class="btn btn-success visible-xs" id="menu-toggle">Menu</a>

                            <h1>About Me</h1>
                                <img class="mada_pics_right" src="../images/me.JPG" alt=""/>
                                <p>My name is Lehi. I had the pleasure of living in Madagascar for 2 years. 
                                It became my second home. Not a day goes by that I don't think about Madagascar, 
                                the friends I made and the memories we shared. So I decided to start a project 
                                that would allow me to productively think about Madagascar.</p>
                                <p>While I was in Madagascar I became fluent in Malagasy, the local language. 
                                Sadly, since being home I have forgotten a lot of what I once knew. It is a beautiful 
                                language and I don't want to lose it. I spent a lot of time trying to find definitions 
                                to Malagasy words on the internet but I had a lot of problems finding good sources. 
                                So I decided to make a dictionary website myself.</p>
                                <p>What started off as just a simple dictionary soon became a lot more. I love learning 
                                about Madagascar so I decided to include that learning in the site as well. I am definitely 
                                no expert on the subject, but I have had a lot of fun researching and learning more about 
                                all the great things of Madagascar.</p>
                                <p>I hope you like my site and that it's useful to you. Please feel free to contact me if 
                                    you have a question or if you spot something that is wrong on the site.
                                    <br><br> Thanks! <br> Lehi Thomas <br> lehithomas25@gmail.com</p>
                            
                            <div class="clear"></div>
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

