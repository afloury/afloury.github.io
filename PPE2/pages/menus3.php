<!DOCTYPE html>
<html>
<title>Menus</title>



<link rel="stylesheet" type="text/css" href="css/styles.css" />

<body>


	<div id="container">
		<section id="main">
			<!-- #main content and sidebar area -->

			<aside id="sidebar1">
				<!-- sidebar1 -->

				<br> <br> <br> <img src="images/me1.jpg" alt="" /><br />
				<img src="images/me2.jpg" alt="" /><br /> <br />
			</aside>
					</section>
	</div>
	
	
	<div>

    
<!-- HEADSTUFF: the Title/ID, the Document Action icons (print,etc), and Description -->



<!-- the main table -->
<table cellspacing="0" class="caltabs">


<!-- ROW: the tabs "month", "week", "week2", "day" -->


  <tbody>


<!-- ROW: the "subject categories" options -->

  

  <tr> 
    <td class="body">


<!-- "previous", "next" and current date string. -->

<table class="calheader">
  <tbody><tr>
    <td class="left">&lt;&lt; <a href="index.php?page=menus2">semaine précédente</a></td>
    <td class="center">
		<?php

$d=date('d', strtotime('after sunday', strtotime(date('d-m-Y'))))+1;

?>
			Du Lundi <?php echo $d ?> Juin au Vendredi <?php echo $d+4 ?> Juin.
      
      &nbsp;&nbsp;&nbsp;&nbsp;
    </td>
    <td class="right"><a href="index.php?page=menus4">semaine suivante</a> &gt;&gt;</td>
  </tr>

</tbody></table>









<!-- the weekbyday-calendar-view. -->
<table class="cal">
<!-- iterate through the days (rows of the table) -->
  
  
    <tbody><tr><th>
          <span class="day">
            Lundi <?php echo $d ?> Juin 2014
          </span>


    </th></tr>
  <tr class="event" id="cal1">
    <td>
<!-- iterate through the events of the day -->
        
            

<!-- print the event text-->
<center>
                        <div class="eventlisting">
                          <a href="index.php?page=jour&amp;j=11" onmouseover="mouseOverEvent(1, 1, 'calinfo1event1')" onmouseout="mouseOutEvent(1, 1, 'calinfo1event1')" class="eventPublished">  
                            

                            <img src="images/rep.jpg" alt="" />

                             <b>Voir le menu</b>


                          </a>
                        </div>
</center>




            
       &nbsp;
   </td>
  </tr>
  
  
  
  
    <tr><th>
          <span class="day">
            Mardi <?php echo $d+1 ?> Juin 2014
          </span>


    </th></tr>
  <tr class="event" id="cal2">
    <td>
<!-- iterate through the events of the day -->
        
            

<!-- print the event text-->
<center>
                        <div class="eventlisting">
                          <a href="index.php?page=jour&amp;j=12" onmouseover="mouseOverEvent(2, 2, 'calinfo2event1')" onmouseout="mouseOutEvent(2, 2, 'calinfo2event1')" class="eventPublished">  
                            

                            <img src="images/rep.jpg" alt="" />

                             <b>Voir le menu</b>


                          </a>
                        </div>
</center>




            
       &nbsp;
   </td>
  </tr>
  
  
  
  
    <tr><th>
          <span class="day">
            Mercredi <?php echo $d+2 ?> Juin 2014
          </span>


    </th></tr>
  <tr class="event" id="cal3">
    <td>
<!-- iterate through the events of the day -->
        
            

<!-- print the event text-->
<center>
                        <div class="eventlisting">
                          <a href="index.php?page=jour&amp;j=13" onmouseover="mouseOverEvent(3, 3, 'calinfo3event1')" onmouseout="mouseOutEvent(3, 3, 'calinfo3event1')" class="eventPublished">  
                            

                            <img src="images/rep.jpg" alt="" />

                             <b>Voir le menu</b>



                          </a>
                        </div>
</center>




            
       &nbsp;
   </td>
  </tr>
  
  
  
  
    <tr><th>
          <span class="day">
            Jeudi <?php echo $d+3 ?> Juin 2014
          </span>

    </th></tr>
  <tr class="event" id="cal4">
    <td>
<!-- iterate through the events of the day -->
        
            

<!-- print the event text-->
<center>
                        <div class="eventlisting">
                          <a href="index.php?page=jour&amp;j=14" onmouseover="mouseOverEvent(4, 4, 'calinfo4event1')" onmouseout="mouseOutEvent(4, 4, 'calinfo4event1')" class="eventPublished">  
                            

                           <img src="images/rep.jpg" alt="" />

                             <b>Voir le menu</b>


                          </a>
                        </div>
</center>




            
       &nbsp;
   </td>
  </tr>
  
  
  
  
    <tr><th>
          <span class="day">
            Vendredi <?php echo $d+4 ?> Juin 2014
          </span>

    </th></tr>
  <tr class="event" id="cal5">
    <td>
<!-- iterate through the events of the day -->
        
            

<!-- print the event text-->
<center>
                        <div class="eventlisting">
                          <a href="index.php?page=jour&amp;j=15" onmouseover="mouseOverEvent(5, 5, 'calinfo5event1')" onmouseout="mouseOutEvent(5, 5, 'calinfo5event1')" class="eventPublished">  
                            

                           <img src="images/rep.jpg" alt="" />

                             <b>Voir le menu</b>



                          </a>
                        </div>
</center>




            
       &nbsp;
   </td>
  </tr>

  <tr class="noevent" id="cal7">
    <td>
<!-- iterate through the events of the day -->
&nbsp;
   </td>
  </tr>
  
  
</tbody></table>



<!-- "previous month", "next month" -links and the current month string. -->

<table class="calheader">
  <tbody><tr>
    <td class="left">&lt;&lt; <a href="index.php?page=menus2">semaine précédente</a></td>
    <td class="center">
      
      	Du Lundi <?php echo $d ?> Juin au Vendredi <?php echo $d+4 ?> Juin.
      
      &nbsp;&nbsp;&nbsp;&nbsp;
    </td>
    <td class="right"><a href="index.php?page=menus4">semaine suivante</a> &gt;&gt;</td>
  </tr>
</tbody></table>




    </td>
  </tr>
</tbody></table>


<!--<metal:block metal:use-macro="python:here.getCXMacro('copyright')"/>-->
</div>
</body>

</html>