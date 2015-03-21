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
                            <h2 style="margin-bottom: 30px">Ohabolana (Proverbs)</h2>
                            <a href="#menu-toggle" class="btn btn-success visible-xs" id="menu-toggle">Menu</a>
                            <div class="col-lg-6">
                                <ul class="proverbs">
                                    <li>By getting angry, you show you are wrong.</li>
                                    <li>Crows are never the whiter for washing themselves.</li>
                                    <li>It is better to refuse than to accept and not to go.</li>
                                    <li>Nothing is so difficult that diligence cannot master it.</li>
                                    <li>Nothing is so full of victory as patience.</li>
                                    <li>Sick people are like kings.</li>
                                    <li>Words are like eggs: when they are hatched they have wings.</li>
                                    <li>A canoe does not know who is king. When it turns over, everyone gets wet.</li>
                                    <li>A little rain each day will fill the rivers to overflowing.</li>
                                    <li>Advice is a stranger; if he's welcome he stays for the night; if not, he leaves the same day.</li>
                                    <li>All who live under the sky are woven together like one big mat.</li>
                                    <li>Better to lose a little money than a little friendship.</li>
                                    <li>Truth is like sugar cane; even if you chew it for a long time, it is still sweet.</li>
                                    <li>Don't be like a shadow: a constant companion, but not a comrade.</li>
                                    <li>She is as undecided as an orphan: if she does not wash her hands, she will be 
                                        told that she is a dirty child; if she washes her hands she will be told that she is wasting water.</li>                                    
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="proverbs">
                                    <li>Poverty won't allow him to lift up his head; dignity won't allow him to bow it down.</li>
                                    <li>Do not kick away the canoe which helped you to cross the river.</li>
                                    <li>Do not measure up the wood before the tree is cut down.</li>
                                    <li>Don't be so much in love that you can't tell when it's raining.</li>
                                    <li> Don't help a bull out of a ditch, for when he's out he'll butt you.</li>
                                    <li>Don't take a second mouthful before you have swallowed the first.</li>
                                    <li>Don't think there are no sharks because the water is calm.</li>
                                    <li>Greet everyone cordially when you don't know who your in-laws are going to be.</li>
                                    <li>Idleness moves so slowly that it will be overtaken by misery.</li>
                                    <li>If we don't fight we remain equals, if we do fight then one of us wins.</li>
                                    <li>If you sell a drum in your own village, you get the money and keep the sound.</li>
                                    <li>In a fight with a fool it's a wise man who quits.</li>
                                    <li>Let your love be like the misty rains, coming softly, but flooding the river.</li>
                                    <li>Living is not a reward and dying is no crime.</li>
                                    <li>The food which is prepared has no master.</li>
                                </ul>
                            </div>                            
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

