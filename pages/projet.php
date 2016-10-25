<!DOCTYPE html>
<html lang="en">

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    
    <?php include("../include/head.inc.php"); ?>

    <body>

        <div class="brand">Portefeuille de compétences</div>
        <div class="address-bar"></div>

        <!-- Navigation -->
        <?php include("../include/navigation.inc.php"); ?>

        <div class="container">

            <div class="row">
                <div class="box">

                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">Projet en 
                            <strong>formation</strong>
                        </h2>
                        <hr>
                    </div>
                    <div class="col-lg-12 text-center">
                        <br>
                        <br>
                        <h2  class="violet">Application mobile BTS SIO
                            <br>
                        </h2>
                        <br>
                        <h5>Contexte de la situation professionnelle</h5>
                    </div>
                    <li>Le laboratoire désire mettre à disposition des visiteurs du service commercial une application Android embarquée permettant d'enregistrer les frais d'une visites chez un praticien et de les transmettre à une base de donnée externe</li>
                    <br>
                    <li> Logiciel utilisé : Eclipse, Win’Design, SQL Server, Machine virtuel (AVD), WAMP, FileZilla</li>
                    <li> L’application Android embarquée devra fournir des interfaces permettant l’authentification, la consultation et la saisie des frais de visites aussi bien en mode connexion qu’en mode hors connexion (grâce à SQLite).</li>

                    <br>
                    <br>
                    <br>
                    <div class="col-lg-12 text-center">
                        <p class="dc">Interface utilisateur de l'application</p>
                    </div>
                    <br>
                    <br>
                    <br>
                    
                    <img src="../img/accueil.PNG" alt="" width="350" height="543" class="immm">
                    <img src="../img/visite.PNG" alt="" width="350" height="543" class="immm">
                    <img src="../img/modif.PNG" alt="" width="350" height="543" class="immm">
                    
                    <div class="testcolumn"><div class="macol">Accueil</div></div>
                    <div class="testcolumn"><div class="macol">Les visites</div></div>
                    <div class="testcolumn"><div class="macol">Modifier</div></div>                   
                    <script>
                        $(window).resize(function() {
                            $('a').css('z-index', 'auto'); //auto reflow
                        });
                    </script>

                </div>
            </div>

        </div>
        <!-- /.container -->

        <?php include("../include/footer.inc.php"); ?>

        

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

    </body>

</html>
