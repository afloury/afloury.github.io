</br></br>
<aside id="sid">
				<!-- sidebar1 -->

				<br> <br> <br> <img src="images/me1.jpg" alt="" /><br />
				<img src="images/me2.jpg" alt="" /><br /> <br />
			</aside>
<td id="portal-column-content">

              
                <div id="content" class="">

                  

                  <div class="documentContent" id="region-content">

                    <a name="documentContent"></a>

                    

                    

                    <div>
      
<span>


        <h3 class="blue" ></br></br></br></br>

	  <!-- do as you will 
	  <div tal:repeat="field python: here.Schema().filterFields(isMetadata=0)">
	    <span metal:use-macro="python: here.widget(field.getName(), mode='view')"/>
	  </div>
          -->
        <?php 
				//connexion à la BD
				$connexion = mysql_connect('localhost','root','');
				$bd=mysql_select_db('rep');
				$sql = 'SELECT * FROM rep WHERE jour="'.$_GET['j'].';"';
				$resultat = mysql_query($sql);
				// Récupération et affichage des données

				while($ligne=mysql_fetch_array($resultat, MYSQL_ASSOC))
				{

					echo('<a class="green" >Entrée : </a><td>'.stripslashes ($ligne['entree']).'</td></br></br></br></br>');
					echo('<a class="green" >Plat : </a><td>'.stripslashes ($ligne['plat']).'</td></br></br></br></br>');
					echo('<a class="green" >Déssert : </a><td>'.stripslashes ($ligne['dessert']).'</td></br></br></br></br>');

		
				}

			?>

      </h3>
    </span></div>

                    
                      
                 
    
        
    

                    

                  </div>

                </div>

              
            </td>