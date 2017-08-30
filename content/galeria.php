<div class="container">
<div class="divider-new">
<h2  class="h2-responsive wow fadeIn">GALERIA FOTOGRÀFICA</h2></div>
<p>sel-lecionar la galeria per veure les imatges</p>
<section id="gallery-sel">
<form action="" method="post"> 
<div class="row"> 

       <div class="container">
      <div class="section">
      <div class="input-field col s12 m6">
  

<select class="form-control col-lg-10" id="galsel" name="galeria">
  <?php  $data=$conn->prepare('SELECT * FROM galeria ORDER BY nom ASC');
      $data->execute();
       while ($row=$data->fetch()){ 
      
    echo  "<option value=\"".$row['id']."\">".$row['nom']."</option>";
    } ?>
</select>

   <button type="submit" class="btn-floating btn-large waves-effect orange lighten-5 " style="margin-top:9px;" name="mostrar">MOSTRAR<i class="fa-camera-retro" aria-hidden="true"></i></button></div>
    </div> 
    </form>
     </section> 
 <section id="best-features">
<?php if(isset($_POST['mostrar'])) {

   $data2=$conn->prepare('SELECT id_media FROM media_galeria WHERE id_galeria=:id_galeria');
       $data2->execute(array('id_galeria'=>$_POST['galeria']));
       while($rows=$data2->fetch()){
        $data3=$conn->prepare('SELECT imatge FROM media WHERE id=:id_media');
        $data3->execute(array('id_media'=>$rows['id_media']));
        $rows2=$data3->fetch();
echo "<div class=\"grid\">";
        echo "<a class=\"example-image-link\" href=\"media/".$rows2['imatge']."\"data-lightbox=\"example-1\">";
       
echo "<img class=\"example-image img-fluid\" src=\"media/".$rows2['imatge']."\" alt=\"image-1\">";
echo "</a>";
      }
    

}
  ?>

</div>

</section>
