 <div class="divider-new"> <h2 class="h2-reponsive wow fadeIn">resultat de la cerca</h2> </div>
 <div class="container">
 
<div class="row">



 <?php 


if (isset($_GET['enviar']))
{
  echo "el resultat: " .$_GET['paraules']. "<br>" ;

$stmt=$conn-> prepare('SELECT * FROM news WHERE titol LIKE :titol OR contingut LIKE :contingut '); 
         $stmt->execute(array(':titol' => '%'.$_GET['paraules'].'%',':contingut' => '%'.$_GET['paraules'].'%'));
   


   while ($rows=$stmt->fetch())
{
echo  "<ul class=\"collection\">";

echo "<i class=\"material-icons circle\">";
echo  "<span class=\"title\">Title</span>";
echo  "<p>".$rows['titol']. "<br>
         ACTUALITAT
      </p>";
echo "<a href =\"index.php?seccio=actualitat&sub=detall&id=".$rows['id']."\">".$rows['titol']."class=\"secondary-content\"</a> ";   ?>  </li>   
  


<?php
$stmt2=$conn-> prepare('SELECT * FROM media WHERE imatge LIKE :imatge '); 
         $stmt2->execute(array(':imatge' => '%'.$_GET['paraules'].'%'));
       while ($rows2=$stmt2->fetch())
       

        { echo "<ul class=\"collection\">";

    echo  "<li class=\"collection-item avatar\">";

echo "<img src=\"./media/".$rows2['imatge']."\" alt=\"\" class=\"circle\">";
echo "<span class=\"title\">Title</span>";
     echo " <p>First Line</p> <br>";
     
   echo   "<a href=\"index.php?seccio=actualitat&sub=detall&imatge=".$rows2['imatge']." class=\"secondary-content\"><i class=\"material-icons\">grade</i></a>";
   
        	 } 
  } 
}


  ?>	


</li>



</div>



 </div>
        