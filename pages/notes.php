<!DOCTYPE html>
<html lang="en">

    
    <link href="../css/prism.css" rel="stylesheet">
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
                        <h2 class="intro-text text-center"> 
                            <strong>Notes</strong>
                        </h2>
                        <hr>
                    </div>
                   
                   <a>Dérouler</a>
                   

                    <div id="accordion">
                    <h3 class="sect1">HTML CSS JavaScript</h3>
                    <div>
                        <p>
                            Banière déroulante
<pre><code class="language-javascript">//Lance la fonction accordion JQuery sur l'id
$(function() {
   $( "#accordion" ).accordion();
});
//Redimentionne les sections à la largeur du contenue
$("#accordion").accordion({ heightStyle: "content" });</code></pre>

<pre>
<code class="language-markup"><script type="prism-html-markup">//Les Fichiers JQuery sont nécessaire (jquery.js, jquery.css)
<div id="accordion">
    <h3>HTML CSS JavaScript</h3>
    <div>
        <p>Banière déroulante</p>
        <p>
            ...
        </p>
    </div>
    <div>
        <p>Swift</p>
    </div>
</div></script></code>
</pre>
                        </p>
                        <br>
                        <p>Redéfinir la hauteur des images pour les mobiles
                            
<pre>
<code class="language-css">// Largeur du mobile minimum 320px et max 480px
@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
    img {
        //Hauteur des images 200px
        height: 200px;
    }
}</code></pre>

<pre>
<code class="language-markup"><script type="prism-html-markup">//Nécessaire dans la page html
<meta name="viewport" content="width=device-width, initial-scale=1"></script></code>
</pre>
                            
                        </p>
                    </div>
                    <h3 class="sect1">Swift</h3>
                    <div>
                        <p>

                        </p>
                    </div>
                    <h3 class="sect1">JAVA</h3>
                    <div>
                        <p>

                        </p>
                    </div>
                    <h3 class="sect1">WS PHP</h3>
                    <div>
                        <p>
                        
                        </p>
                    </div>
                  </div>

                   
                </div>
            </div>

        </div>
        <!-- /.container -->

        <?php include("../include/footer.inc.php"); ?>
        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="../js/prism.js"></script>
        

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/accordion.js"></script>

    </body>

</html>
