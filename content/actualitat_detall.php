<?php require_once("admin/lib/connectar.php");  ?>



<?php
 $stmt = $conn->prepare('SELECT * FROM news WHERE id=:id');
       $stmt->execute(array(':id'=>$_GET['id']));
       while($row=$stmt->fetch()){

     echo "<div class=\"col-lg-6\">";
            /*<!--Card-->*/
           echo  "<div class=\"card \" >";

               /* <!--Card image-->*/
           echo "<div class=\"view overlay hm-white-slight\">" ;                     
                


          echo      " <img src=\"./media/".$row['imatge']."\" class=\"img-fluid\" alt=\"\">";
           echo     "<a>";
            echo        "<div class=\"mask\"></div>";
            echo   "</a>";
            echo "</div>";
                /*<!--/.Card image-->

                <!--Card content-->*/
            echo "<div class=\"card-block text-center\">";
                   /* <!--Title-->*/
            echo  "<h4 class=\"card-title\">".$row['titol']."</a></h4>";
                    echo "<hr>";
                    /*<!--Text-->*/
               echo     "<p class=\"card-text\">" .$row['contingut']."</p>";
               echo        " </div>";
               echo  "<p class=\"sub\">" .$row['data_publicacio']. "</p>";
                /*    <!--/.Card content-->*/
           echo " </div>";
/*  <!--/.Card-->*/
           echo  "</div>";
       }
       ?>