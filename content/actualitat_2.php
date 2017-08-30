 <?php require_once("admin/lib/connectar.php");  ?>
 <div class="divider-new"> <h2 class="h2-reponsive wow fadeIn">actualitats i novetats</h2> </div>
<table class="striped">
        <thead>
          <tr>
              <th data-field="id">id</th>
              <th data-field="titol">titol</th>
              <th data-field="contingut">contingut</th>
              <th data-field="data_publicacio">data_publicacio</th>
              <th data-field="hora_publicacio">hora_publicacio</th>
              <th data-field="imatge">imatge</th>
          </tr>
        </thead>

        <tbody> 
        <?php
         $data=$conn-> prepare("SELECT id,titol,contingut,data_publicacio,hora_publicacio,imatge FROM news ORDER BY data_publicacio DESC"); 
         $data->execute();
          while ($row=$data->fetch())
        {
            echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['titol']."</td>";
               echo "<td>".$row['data_publicacio']."</td>";    


        echo "<td class=\"right\">";
            echo "<i class=\"mdi-action-delete\"></i>";
             echo "<i class=\"mdi-content-create\"></i>";
              echo "<i class=\"mdi-action-search\"></i>";
              echo "</td></tr>";}


?>

    

</tbody>;

     </table>
    

        <?php 
        $i=0;
         $data=$conn-> prepare("SELECT id,titol,contingut,data_publicacio,hora_publicacio,imatge FROM news ORDER BY data_publicacio DESC"); 
         $data->execute();
          while ($row=$data->fetch()) {
            if($i%2==0){echo "<div class\"row\">";}
                       
                       echo "<div class=\"col-lg-6\">";
            /*<!--Card-->*/
           echo  "<div class=\"card \" >";

               /* <!--Card image-->*/
                echo "<div class=\"view overlay hm-white-slight\">" ;                     
                


              echo      "<img src=\"".$row['imatge']."\" class=\"img-fluid\" alt=\"\">";
               echo     "<a>";
                echo        "<div class=\"mask\"></div>";
                 echo   "</a>";
                echo "</div>";
                /*<!--/.Card image-->

                <!--Card content-->*/
                echo "<div class=\"card-block text-center\">";
                   /* <!--Title-->*/
                 echo  "<h4 class=\"card-title\"><a href=\" index.php?seccio=actualitat&sub=detall&id=".$row['id']."\">".$row['titol']."</a></h4>";
                    echo "<hr>";
                    /*<!--Text-->*/
               echo     "<p class=\"card-text\">" .$row['contingut']."</p>";
               echo        " </div>";
               echo  "<p class=\"sub\">" .$row['data_publicacio']. "</p>";
                /*    <!--/.Card content-->*/
           echo " </div>";
/*  <!--/.Card-->*/
           echo  "</div>";
           if($i%2!=0){
            echo "</div>";
            echo "<br>";

           }
       }

         /* https://v4-alpha.getbootstrap.com/components/card/*/
    echo  "<div class=\"card-columns\">"
  echo "<div class=\"card\">"
   echo "<img class=\"card-img-top img-fluid" src=\"".$row['imatge']."\" alt=\"Card image cap\">"
   echo "<div class=\"card-block\">"
   echo   "<h4 class="card-title">".$row['titol']."</h4>"
    echo "  <p class=\"card-text\">".$row['contingut']."</p> "
    echo "</div></div>"
  
  echo"<div class=\"card p-3\">"
    echo "<blockquote class=\"card-block card-blockquote\">"
      echo "<p>".$row['contingut']."</p>"
      echo "<footer>"
       echo "<small class=\"text-muted\">"
        echo  "Someone famous in <cite title=\"Source Title\">".$row['title']."</cite>"
       echo "</small>
      </footer>
    </blockquote>
  </div>
  <div class=\"card\">"
   echo "<img class=\"card-img-top img-fluid\" src=\"".$row['imatge']."\" alt=\"Card image cap\">"
    echo <div class="card-block">
    echo  <h4 class="card-title">Card title</h4>
   echo   <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    echo    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    echo  </div>
  </div>
  echo  <div class="card card-inverse card-primary p-3 text-center">
   echo   <blockquote class="card-blockquote">
     echo   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
      echo    <small>
        echo    Someone famous in <cite title="Source Title">Source Title</cite>
       echo   </small>
      echo  </footer>
    echo  </blockquote>
  echo  </div>
  echo  <div class="card text-center">
   echo   <div class="card-block">
     echo   <h4 class="card-title">Card title</h4>
      echo  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      echo  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    echo  </div>
  echo  </div>
  echo  <div class="card">
    echo  <img class="card-img img-fluid" src="..." alt="Card image">
   echo </div>
   echo <div class="card p-3 text-right">
     echo <blockquote class="card-blockquote">
      echo  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      echo  <footer>
       echo   "<small class="text-muted">Someone famous in <cite title="Source Title">Source Title</cite>
       echo   "</small>"
       echo "</footer>"
    echo  "</blockquote>"
   echo "</div>"
  echo  "<div class=\"card\">"
   echo   "<div class=\"card-block\">"
    echo    "<h4 class=\"card-title\">".$row['title']"."</h4>"
     echo   "<p class=\"card-text\">".$row['contingut']."</p>"
      echo  "<p class=\"card-text\"><small class=\"text-muted\">Last updated 3 mins ago</small></p>"
    echo  "</div>"
  echo  "</div>"
  echo "</div>"  
       /*<!--Second columnn-->*/











?>

        
       <!--principi bloc gran-->     
  <div class="row">
<div class="col s12 m12">
   <div class="card">
    <div class="card-action"> 
      <div class="card-image">
        <img src="media/masbes.jpg"> <span class="card-title">Visita Granja Escola Mas Bes</span>
      </div>
     
       <div class="card-content"
          <p>Les visites guiades permeten explicar el món rural a famílies, grups d'amics, escoles, estudiants universitaris, ramaders i professionals del sector. Es realitza un recorregut per la granja on s'explica la vida de les vaques, el procés de la llet, la munyida tradicional i automàtica i es visualitza un documental on s'explica el dia a dia de la granja.

Amb la visita guiada es visita la sala d'exposicions d'eines antigues del camp (inaugurada el juliol de 2015) on veureu com era la tecnologia en els diferents oficis antics del camp, per exemple: cistellers, forner, fuster, vinyater, carboner i els estris que es feien servir en una casa pairal per la matança del porc, el treball dels camps fins arribada dels primers tractors a les nostres terres.
</p></div>
        </div>
        <div class="card-action">
          <a href="http://masbesdesalitja.blogspot.com.es/p/visites.html">Pàgina web Mas Bes</a>
        </div>
      </div>
    </div>
  </div>
 </div>
<!--final bloc gran-->


        
      

                

    </div>

</section >


    <div class="row">

        <!--First columnn-->
        <div class="col-lg-4">
            <!--Card-->
            <div class="card wow fadeIn">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="media/esmorzar.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Title-->
                    <h4 class="card-title">ESMORZAR AL LLIT </h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text">A que véns a relaxar? Ja pots demanar el servei d'esmorzar al llit sense suplements abans de les 10h tot el estiu.<br>
<h5>OFERTA ESTIU 2017 </h5>

                    </p>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class="col-lg-4">
            <!--Card-->
            <div class="card wow fadeIn" data-wow-delay="0.2s">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="media/nens.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Title-->
                    <h4 class="card-title">DESCOBRIR EL ENTORN AL CAVALL</h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text">Desde june pots descobrir el entorn del nostre casa rural al cavall ,una ruta de 2 a 3 hores de dilluns a divendres ,reserves fet abans de 15 de juny per 2 persones i més inclou una ruta gratis !
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class="col-lg-4">
            <!--Card-->
            <div class="card wow fadeIn" data-wow-delay="0.4s">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="media/cavall.jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Title-->
                    <h4 class="card-title">Newest Technolgies</h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->

      

                

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->
    </div>


  </div></div>