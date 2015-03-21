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
                            <p>Here are a few quick things you can learn that will 
                                help you in Madagascar.</p>
                            <h2>Basics</h2>
                            <table class="tftable" border="1">
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>Hello</td><td>Manahoana</td></tr>
                                <tr><td>What's new?</td><td>Inona vaovao?</td></tr>
                                <tr><td>Sir/Madam</td><td>Tompoko</td></tr>
                                <tr><td>Fine, thank you. (literally very good)</td><td>Tsara be.</td></tr>
                                <tr><td>What is your name?</td><td>Inona ny anaranao?</td></tr>
                                <tr><td>My name is ______.</td><td>______ ny aranako.</td></tr>
                                <tr><td>Nice to meet you.</td><td>Faly mahafantatra anao.</td></tr>
                                <tr><td>Please</td><td>Azafady</td></tr>
                                <tr><td>Thank you.</td><td>Misaotra</td></tr>
                                <tr><td>You're welcome. </td><td>Tsisy fisaorana.</td></tr>
                                <tr><td>Yes.</td><td>Eny.</td></tr>
                                <tr><td>No.</td><td>Tsia.</td></tr>
                                <tr><td>Excuse me.</td><td>Azafady.</td></tr>
                                <tr><td>I'm sorry.</td><td>Azafady.</td></tr>
                                <tr><td>Goodbye.</td><td>Veloma.</td></tr>
                            </table>    

                            <h2>Numbers</h2>
                            <table class="tftable" border="1">
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>1 </td><td>iray </td></tr>
                                <tr><td>2 </td><td>roa </td></tr>
                                <tr><td>3 </td><td>telo </td></tr>
                                <tr><td>4 </td><td>efatra </td></tr>
                                <tr><td>5 </td><td>dimy </td></tr>
                                <tr><td>6 </td><td>enina </td></tr>
                                <tr><td>7 </td><td>fito </td></tr>
                                <tr><td>8 </td><td>valo </td></tr>
                                <tr><td>9 </td><td>sivy </td></tr>
                                <tr><td>10 </td><td>folo </td></tr>
                                <tr><td>11</td><td>raikambin'ny folo </td></tr>
                                <tr><td>12 </td><td>roambin'ny folo </td></tr>
                                <tr><td>13 </td><td>teloambin'ny folo </td></tr>
                                <tr><td>14 </td><td>efatrambin'ny folo </td></tr>
                                <tr><td>15 </td><td>dimiambin'ny folo </td></tr>
                                <tr><td>16 </td><td>eninambin'ny folo </td></tr>
                                <tr><td>17 </td><td>fitoambin'ny folo </td></tr>
                                <tr><td>18 </td><td>valoambin'ny folo </td></tr>
                                <tr><td>19 </td><td>siviambin'ny folo </td></tr>
                                <tr><td>20 </td><td>roambolo </td></tr>
                                <tr><td>21 </td><td>iraik' ambiroapolo </td></tr>
                                <tr><td>22 </td><td>roambiriapolo</td></tr>
                                <tr><td>23 </td><td>teloambiroapolo</td></tr>
                                <tr><td>30 </td><td>telompolo</td></tr>
                                <tr><td>40 </td><td>efapolo</td></tr>
                                <tr><td>50 </td><td>dimampolo</td></tr>
                                <tr><td>60 </td><td>enimpolo</td></tr>
                                <tr><td>70 </td><td>fitompolo</td></tr>
                                <tr><td>80 </td><td>valompolo</td></tr>
                                <tr><td>90 </td><td>sivifolo</td></tr>
                                <tr><td>100 </td><td>zato </td></tr>
                                <tr><td> 200</td><td>roanjato</td></tr>
                                <tr><td>300 </td><td>telonjato</td></tr>
                                <tr><td>1000 </td><td>arivo</td></tr>
                                <tr><td>2000 </td><td>roa arivo</td></tr>
                                <tr><td>10,000 </td><td>iray alina</td></tr>
                                <tr><td>100,000 </td><td>iray etsy</td></tr>
                                <tr><td>1,000,000 </td><td>iray tapitr'isa</td></tr>
                                <tr><td>Half </td><td>sasany, antsasany, tapany</td></tr>
                                <tr><td>Less </td><td>latsaka</td></tr>
                                <tr><td>More </td><td>mihoatra</td></tr>
                            </table>    

                            <h2>Time</h2>
                            <table class="tftable" border="1">              
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td> Now</td><td> izao, ankehitriny</td></tr>
                                <tr><td> Before</td><td>talohany </td></tr>
                                <tr><td>Morning </td><td> maraina</td></tr>
                                <tr><td> Afternoon</td><td>tolak'andro </td></tr>
                                <tr><td> Evening</td><td> hariva</td></tr>
                                <tr><td> Night</td><td>alina </td></tr>
                                <tr><td>One o'clock in the morning  </td><td>iray ora maraina </td></tr>
                                <tr><td>Two o'clock in the morning  </td><td> roa ora maraina</td></tr>
                                <tr><td>Nine o'clock in the morning  </td><td>sivy ora maraina </td></tr>
                                <tr><td>One o'clock in the afternoon  </td><td>iray ora antoandro </td></tr>
                                <tr><td>Two o'clock in the afternoon  </td><td>roa ora hariva </td></tr>
                                <tr><td>Six o'clock in the evening  </td><td>enina ora hariva </td></tr>
                                <tr><td>Seven o'clock in the evening  </td><td>fito ora hariva </td></tr>
                                <tr><td>Quarter 'til seven (in the evening), 18:45  </td><td>amin'ny fito latsaka fahefany </td></tr>
                                <tr><td>Quarter past seven (in the evening), 19:15  </td><td>amin'ny fito sy fahefany </td></tr>
                                <tr><td>Half-past seven, 19:30  </td><td>amin'ny fito sy sasany </td></tr>
                                <tr><td>Midnight </td><td>sasakalina </td></tr>
                                <tr><td>weekly </td><td>isan-kerinandro </td></tr>
                                <tr><td>monthly </td><td>isam-bolana </td></tr>
                                <tr><td>annually </td><td>isan-taona </td></tr>
                            </table>    

                            <h2>Days</h2>
                            <table class="tftable" border="1">   
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>Sunday </td><td>Alahady </td></tr>
                                <tr><td> Monday</td><td> Alatsinainy</td></tr>
                                <tr><td>Tuesday </td><td> Talata</td></tr>
                                <tr><td>Wednesday </td><td> Alarobia</td></tr>
                                <tr><td>Thursday </td><td>Alakamisy </td></tr>
                                <tr><td>Friday</td><td> Zoma</td></tr>
                                <tr><td> Saturday</td><td>Asabotsy </td></tr>
                            </table>    

                            <h2>Months</h2>
                            <table class="tftable" border="1">   
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>January </td><td> Janoary</td></tr>
                                <tr><td>February </td><td> Febroary</td></tr>
                                <tr><td>March </td><td>Martsa </td></tr>
                                <tr><td>April </td><td> Aprily</td></tr>
                                <tr><td>May </td><td> Mey</td></tr>
                                <tr><td>June </td><td> Jona</td></tr>
                                <tr><td>July </td><td> Jolay</td></tr>
                                <tr><td>August </td><td>Aogositra </td></tr>
                                <tr><td>September </td><td> Septambra</td></tr>
                                <tr><td>October </td><td> Oktobra</td></tr>
                                <tr><td>November</td><td> Novambra</td></tr>
                                <tr><td>December</td><td> Desambra</td></tr>
                            </table>    

                            <h2>Colors</h2>
                            <table class="tftable" border="1">   
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>Black</td><td>mainty </td></tr>
                                <tr><td>White</td><td>fotsy</td></tr>
                                <tr><td>Grey</td><td>volon-davenona </td></tr>
                                <tr><td>Red</td><td> mena</td></tr>
                                <tr><td>Blue</td><td> manga</td></tr>
                                <tr><td>Yellow</td><td> mavo</td></tr>
                                <tr><td>Green</td><td> maitso</td></tr>
                                <tr><td>Orange</td><td>volom-boasary </td></tr>
                                <tr><td>Purple</td><td> ranonombalahy</td></tr>
                                <tr><td>Brown</td><td>volontany </td></tr>
                                <tr><td>Pink</td><td>mavo-kely </td></tr>
                                </table>    

                            <h2>Directions</h2>
                            <table class="tftable" border="1">  
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>North</td><td>avaratra </td></tr>
                                <tr><td>South</td><td>atsimo</td></tr>
                                <tr><td>East</td><td>atsinanana</td></tr>
                                <tr><td>West</td><td>andrefana</td></tr>
                                <tr><td>Where is the _____ ? </td><td>Aiza ny_____? </td></tr>
                                <tr><td>Road </td><td>Lalana </td></tr>
                                <tr><td>Turn to the left.</td><td>mihodìna havia </td></tr>
                                <tr><td>Turn to the right.</td><td>mihodìna havanana</td></tr>
                                <tr><td>Left </td><td>havia, ankavia </td></tr>
                                <tr><td>Right </td><td>havanana, ankavanana </td></tr>
                                <tr><td>Straight </td><td>mahitsy</td></tr>
                                <tr><td>After the _____ </td><td>Aorian'ny ____</td></tr>
                                <tr><td>Before the _____ </td><td>Alohan'ny ____</td></tr>
                                <tr><td>Crossroads</td><td>sampan-dalana</td></tr>                                
                                <tr><td>On top</td><td>ambony</td></tr>
                                <tr><td>On bottom</td><td>a</td></tr>
                                </table>    

                            <h2>Food</h2>
                            <table class="tftable" border="1">   
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>Breakfast </td><td>sakafo maraina </td></tr>
                                <tr><td>Lunch </td><td>sakafo tolakandro </td></tr>
                                <tr><td>Dinner </td><td>sakafo hariva </td></tr>
                                <tr><td>Chicken </td><td>henan akoho </td></tr>
                                <tr><td>Beef </td><td>henan omby</td></tr>
                                <tr><td>Fish </td><td>tondro</td></tr>                                
                                <tr><td>Pork </td><td>hena kisoa </td></tr>
                                <tr><td>Eggs </td><td>atody </td></tr>
                                <tr><td>Vegetables </td><td>anana </td></tr>
                                <tr><td>Fruit </td><td>voankazo </td></tr>
                                <tr><td>Banana </td><td>akondro </td></tr>
                                <tr><td>Bread </td><td>mofo </td></tr>
                                <tr><td>Rice </td><td>vary </td></tr>
                                <tr><td>Coffee </td><td>cafe </td></tr>
                                <tr><td>Water </td><td>rano </td></tr>
                                <tr><td>Sugar </td><td>sira mamy </td></tr>
                                <tr><td>Salt </td><td>sira </td></tr>
                                <tr><td>It was delicious  </td><td>matsiro be </td></tr>
                                <tr><td>I am (very) full </td><td>voki (be) sao </td></tr>
                                <tr><td>Alcohol </td><td>toaka </td></tr>
                                </table>    

                            <h2>Shopping</h2>
                            <table class="tftable" border="1">  
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>How much does this cost ?  </td><td>Hoatrinona ? </td></tr>
                                <tr><td>That's expensive !  </td><td>Lafo loatra ! </td></tr>
                                <tr><td>Expensive </td><td>Lafo </td></tr>
                                <tr><td>Cheap </td><td>Mora </td></tr>
                                <tr><td>I don't want that  </td><td>Tsy mila aho. </td></tr>
                                <tr><td>I need ____.  </td><td>Mila ____ aho.</td></tr>
                                <tr><td>soap</td><td>savony</td></tr>
                                <tr><td>shampoo</td><td>savony anasàna loha</td></tr>
                                <tr><td>a razor</td><td>fitaovam-piaratana </td></tr>
                                <tr><td>batteries</td><td>bateria, pila</td></tr>
                                <tr><td>sunscreen</td><td>fiarovana ny hoditra amin'ny masoandro</td></tr>
                                <tr><td>a postcard. </td><td>karatra paositra, kara-paositra</td></tr>
                                <tr><td>stamps</td><td>kase</td></tr>
                                <tr><td>paper</td><td>taratasy</td></tr>
                                <tr><td>a pen</td><td>penina</td></tr>
                                <tr><td>books in English  </td><td> boky miteny anglisy</td></tr>
                                <tr><td>a Malagasy-English dictionary. </td><td>rakibolana malagasy-anglisy</td></tr>
                                </table>    

                            <h2>Authority</h2>
                            <table class="tftable" border="1">  
                                <tr><th>English</th><th>Malagasy</th></tr>
                                <tr><td>It's a mistake. </td><td> Misy diso.</td></tr>
                                <tr><td> Where are you taking me ? </td><td>Entinareo aiza aho</td></tr>
                                <tr><td>Am I under arrest? </td><td>Samborinareo ve aho</td></tr>
                                <tr><td> I am a(n) American/Australian/British/Canadian. </td><td>Vazaha amerikanina/aostralianina/britanika/kanadiana aho</td></tr>
                                <tr><td>I demand to call the American/Australian/British/Canadian embassy </td><td>Mangataka hiantso ny ambasady amerikanina/aostralianina/britanika/kanadiana aho</td></tr>
                                <tr><td>Can I simply pay a fine ? </td><td>Afaka mandoa ny lamandy/dina ve aho?</td></tr>
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

