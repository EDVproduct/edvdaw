

<div class="view hm-grey-light">
    <div class="full-bg-img flex-center">
        <ul class="animated fadeInUp">
            <li>
                <h1 class="h1-responsive">CASAS RURALES </h1></li>
           
            <li >
                <a   href="index.php?seccio=registre"  class=" btn-sample btn-lg btn-block" ; 
  border-color: #F2DD8A; ">REGISTRAR</a>
                <!--<a class="waves-effect waves-light btn-large">Button</a>-->
                <a   href="admin/index.php"  class=" btn-sample btn-lg btn-block"  >  ENTRAR  </a>
            
            </li>
        </ul>
    </div>
</div>

<div class="container">
<!--/.Mask-->

<!--Section: Best features-->

<div class="divider-new"> <h2 class="h2-reponsive wow fadeIn"> contacta amb nosaltres</h2> </div>
        
<!--Section: Contact v.1-->
<section class="section mb-4">
<div id="contact"
    <!--Section heading-->
    <h1 class="section-heading">FORMULARIO DE CONTACTE</h1>
    <!--Section sescription-->
    

    <div class="row">

        <!--First column-->
        <div class="col-md-6">

            <!--Form with header-->
            <div class="card">
 <?php if(isset($_POST['enviar'])) { $stmt = $conn->prepare('INSERT INTO missatge (tema,contingut,mail,nom,data_enviament,hora_enviament,llegit,contestat) VALUES (:tema,:contingut,:mail,:nom,:data_enviament,:hora_enviament,:llegit,:contestat)');

        $rows=$stmt->execute(array(':tema'=>$_POST['tema'],':contingut'=>$_POST['contingut'],':mail'=>$_POST['mail'],':nom'=>$_POST['nom'],':data_enviament'=>date("Y-m-d"),':hora_enviament'=>date("h:i:s"),':llegit'=>0,'contestat'=>0));

        if($rows==1){echo "se ha enviat correctament";
           }   
       }
            else { echo "no se ha enviat correctament";
}

          ?>
                <form action="" method="post"> <div class="card-block">

               
                    <!--Header-->
                    <div class="form-header rgba-black-light">
                        <h3><i class="fa fa-envelope"></i> escriu 'ns:</h3>
                    </div>

                  
                    <!--Body-->
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="form3" name="nom" class="form-control">
                        <label for="form3">nom i cognom</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" name="mail" class="form-control">
                        <label for="form2">correu electronic</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form32" name="tema" class="form-control">
                        <label for="form32">asunto</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form8" name="contingut" class="md-textarea"></textarea>
                        <label for="form8">comentaris(opt)</label>
                    </div>

                    <div class="text-center">
                        <button class="waves-effect waves-light" name="enviar" btn-large rgba-black-light">enviar</button>
                    </div> </form>

                </div>

            </div>
            <!--/Form with header-->

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-5">

            <!--Google map-->
            <div id="map-container" class="z-depth-1-half map-container" ><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2966.1369526494077!2d2.8161185155028488!3d41.9758692792145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bae7212c91a965%3A0xdd85870e80bf177!2sADAMS!5e0!3m2!1ses!2ses!4v1498044595462" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fa-l fa-map-marker" aria-hidden="true"></i></a>
                    
                    <p>Girona</p>
                </div>

                <div class="col-md-4">
                   <i class="fa fa-phone" aria-hidden="true"></i>
                    <p>+ 01 234 567 89</p>
                    <p>dill-dium, 6:00-22:00</p>
                </div>

                <div class="col-md-4">
                    <i class="fa fa-envelope" aria-hidden="true"></i></a>
                    <p>info@casarural.com</p>
                    <p>sale@casarural.com</p>
                </div>
            </div>

        </div>
        <!--/Second column-->

    </div>

</section>
<!--/Section: Contact v.1-->
