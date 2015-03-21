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
                        <div class="col-lg-8 main">
                            <a href="#menu-toggle" class="btn btn-success visible-xs" id="menu-toggle">Menu</a>
                            <h3><strong>VOWELS</strong></h3>
                            <p>The Malagasy language has only 4 vowel sounds: a, e, i, and o,
                                pronounced as follows:</p>

                            <p><strong>A</strong> Sounds [æ] as in the English word: Father.<br>
                                Examples: Salama (Hello), Manana (to have).</p>

                            <p><strong>E</strong> sounds [ei] as in the English word; made, pay.<br>
                                Examples: Veloma (Bye!), teny (language/words), enina (six).</p>

                            <p><strong>I / Y</strong> (Ending) sounds [i:] as in the English word; Keep, leek.<br>
                                Examples: Misy (there is), mipetraka (to live/to sit), tsia (no)</p>

                            <p><strong>O</strong> sounds, [u] as in the English word: Pool, Sue.<br>
                                Examples: Aho (I), Voky (full)</p>
                            
                            <br>

                            <h3><strong>DIFFICULT SOUNDS</strong></h3>
                            <table  class="tftable" border="2">
                                <tr>
                                    <td><strong>ao</strong><br>
                                        vaovao (new)</td>
                                    <td><strong>tr</strong><br>
                                        tratra (chest)</td>
                                    <td><strong>dr</strong><br>
                                        drafitra (draft)</td>
                                    <td><strong>nj</strong><br>
                                        onja (wave)</td>
                                </tr>
                                <tr>
                                    <td><strong>oa</strong><br>
                                        soa (good)</td>
                                    <td><strong>ts</strong><br>
                                        tsotra (simple)</td>
                                    <td><strong>ndr</strong><br>
                                        Indrindra (especially)</td>
                                        <td><strong>z</strong><br>
                                        Zaza (baby)</td>
                                </tr>
                            </table>
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

