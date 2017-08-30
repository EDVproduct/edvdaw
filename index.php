
<?php require_once('lib/connectar.php'); ?>


<html lang="ca">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/lightbox.min.css">
  
    <!-- Template styles -->
   
     <style>
        /* TEMPLATE STYLES */ html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }

        section{
            margin-top: 45px;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #1C2331;
        }
        
        footer.page-footer {
            background-color: #1C2331;
            margin-top: -1px;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("media/fondo.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }



.btn-sample { 
  color: #ffffff; 
  background-color: #A39879; 
  border-color: #F2DD8A; 
} 
 
.btn-sample:hover, 
.btn-sample:focus, 
.btn-sample:active, 
.btn-sample.active, 
.open .dropdown-toggle.btn-sample { 
  color: #ffffff; 
  background-color: #A6915B; 
  border-color: #F2DD8A; 
} 

      
    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img class="navbar-brand" href="<?php  $stmt=$conn->prepare('SELECT * FROM dades_web ');
    $stmt->execute(array());
    $rows=$stmt->fetch(); echo $rows['logo']; 
if($rows['logo']!=""){
    echo "<img src =\"admin/images/".$rows['logo']."\" height=\"25px;\" >";}
else{echo "<span>".$rows['nom']."</span>" ;
}?>  
               
            
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=actualitat">actualitat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=slider">slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=galeria">galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=tarifes">tarifes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?seccio=registre">registre</a>
                    </li>
                </ul>
                <form class="form-inline waves-effect waves-light" action="" method="get">
                    <input type="hidden" name="seccio"  value="cercar" >


                    <input class="form-control" type="text" placeholder="cercar a la web" name="paraules" >

          <button type="submit" style="color:white;" class="btn-link" name="enviar" ><i class="fa fa-search prefix"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <?php
        if(isset($_GET['seccio'])){
            if (isset($_GET['sub'])){
            include_once("content/".$_GET['seccio']."_".$_GET['sub'].".php");
        }

        else

            {
             include_once("content/".$_GET['seccio'].".php");
    }
    }
        else{
            include_once("content/inicial.php");

        }
    ?>
    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">

               <?php
  $stmt=$conn->prepare('SELECT * FROM dades_web ');
    $stmt->execute(array());
    $rows=$stmt->fetch();
    
    echo "<div class=\"card medium\">";
    echo "<div class=\"card-image waves-effect waves-block waves-light\">";
    echo "<div class=\"row\">";
   echo "<div class=\"col-lg-1 col-md-1 offset-lg-1\" ></div>";
        echo "<img class=\"example-image\" src=\"admin/media/".$rows['logo']."\"></a>";
    echo "</div>"; echo "<div class=\"row\">";
     echo "<div class=\"col-lg-1 col-md-1 offset-lg-1\" ></div>";
    echo "<div class=\"card-content\">";
    echo "<span class=\"card-title activator grey-text text-darken-4\">".$rows['nom']."<i class=\"mdi-navigation-more-vert right\"></i></span>";
   
    echo "<span class=\"card-title grey-text text-darken-4\">";
    
    echo "<p>Adreça: ".$rows['adres']."</p>";
     echo "<p>Població: ".$rows['poble']."</p>";
   
     echo "<p>codec postal: ".$rows['cp']."</p>";
      echo "<p>Telèfon: ".$rows['telf']."</p>";
    echo "<a href=mailto:".$rows['mail'].">".$rows['mail']."</a>";
    
    echo "</div>";
  
    echo "</div>";
    echo "</div>";
 echo "</div>";
?></div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">First column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Second column</h5>
                    <ul>
                        <li><a href="#!">Link 1</a></li>
                        <li><a href="#!">Link 2</a></li>
                        <li><a href="#!">Link 3</a></li>
                        <li><a href="#!">Link 4</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Third column</h5>
                    <div class="mdl-mega-footer__bottom-section">
               <div class="mdl-logo">
                  Bottom Section
               </div>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

 <script src="js/lightbox-plus-jquery.min.js"></script>

 <script type="text/javascript" src="js/gridify.js"></script>
<script type="text/javascript">
    window.onload = function(){
        var options =
        {
            srcNode: 'img',             // grid items (class, node)
            margin: '20px',             // margin in pixel, default: 0px
            width: '250px',             // grid item width in pixel, default: 220px
            max_width: '',              // dynamic gird item width if specified, (pixel)
            resizable: true,            // re-layout if window resize
            transition: 'all 0.5s ease' // support transition for CSS3, default: all 0.5s ease
        }
        document.querySelector('.grid').gridify(options);
    }

</script>

</body>

</html>