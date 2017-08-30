<style> body {
    margin: 0;
    padding: 0;
    width: 100%; /* full window width */
    text-align: center;
}
#wrapper {
    width: 95%; /* of body width */
}
#wrapper>div {
    display: inline-block;
    width: 100%; /* of wrapper width */
    margin: auto;
    text-align: left;
}
/* alternately */
/*
#wrapper>div {
    float: left;
    width: 31%; /* of wrapper width */
    margin: 0 10%;
    text-align: left;
}
*/
</style>


<?php $stmt2 = $conn->prepare('SELECT COUNT(id) FROM slider_img');
          $stmt2->execute();
          $nrows2 = $stmt2->fetchColumn();

echo $nrows2;

  $stmt=$conn->prepare('SELECT * FROM slider_img ');
    $stmt->execute();





    ?>

<section id="content">

  <!--start container-->
  <div class="container" style="width:100%">
    <div class="section">
     <div id=wrapper>
   
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel"> <ol class="carousel-indicators">
    <!--Indicators--><?php $j=0;
    while($j<$nrows2){ ?>
 <li data-target="#carousel-example-1z" data-slide-to="<?php echo $j; ?> "  <?php if($j==0){echo "class=\"active\"";} ?>></li>
        
   
     <?php $j++; }?>
 
       
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">

  

 <!--First slide-->
       
        <!--/First slide-->
       

<?php  $i=0;

while  ($rows=$stmt->fetch()) 

{



    ?>
        <!--Third slide-->
        <div class="carousel-item <?php if($i==0){echo "active";}?>">
            <img src="slider/<?php echo $rows['imatge'] ;?>" style="width:1024px;height:768"  alt="Third slide">
        </div>
   

<?php $i++;} ?>     <!--/Third slide-->
    </div>
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div></div>
<!--/.Carousel Wrapper-->
  <div class="divider"></div>
    </div>
  </div>
  <!--end container-->
</section>
<!-- END CONTENT -->