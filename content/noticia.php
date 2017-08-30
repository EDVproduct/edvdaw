<?php require_once('connectar.php') ;
if (isset($_POST['generar']))
{
  if(isset($_POST['generar'])){
//COMPROBAR DUPLICATS DNI
$data = $conn -> prepare('SELECT * FROM dades_personals WHERE nif=:patata');
$data-> execute(array(':patata'=>$_POST['dni']));
while($row = $data->fetch()){ echo "Aquest NIF ja està al base de dades<br>"
$existent==true;
}
if ($existent==false) {

  $stmt = $conn->prepare('INSERT INTO dades_personals(nif,nom,cognom,correu,tel)VALUES(:nif,:nom,:cognom,:correu,:tel)');
$rows=$stmt->execute(array(':nif'=>$_POST['dni'],':nom'=>$_POST['nom'],':cognom'=>$_POST['cognom'],':correu'=>$_POST['mail'],':tel'=>$_POST['tel'],));

if($rows==1){

  echo "consulta relaitzada correctament...";
}
}

}
}

?>


<!DOCTYPE html>
<html>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SECCIO CURRICULUM</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

<style >
 .tekst { width: 500px; padding: 10px;margin: 6px; } 
 .teksta{width: 500px; padding: 30px;margin: 6px;}
 .tekstp{ width: 400px; padding: 6px; margin: 6px;}
 

</style>

</head>
<body>
  <div class="row"><div class="col-md-3"></div>
  <div class="col-md-8"> <h4>FORMULARIO PER FER EL CURRICULUM</h4>

  <div class="form-group"><form method="post" action="">

  <input class="tekst" name="dni" type="text" placeholder="dni" >
  </div>
  <div class="col-md-8">

  <input class="tekst" name="nom" type="text"  placeholder="nom" >
  </div>
  <div class="col-md-8">
 
  <input class="tekst" name="cognom" type="text" placeholder="cognom">

</div>
<div class="col-md-8">
 
  <input class="tekst" name="adreça" type="text"  placeholder="adreça">

</div>
<div class="col-md-12">

  <input class="tekst" name="mail" type="email"  placeholder="mail" >
</div>
<div class="col-md-8">
  <input class="tekst" class="tekst" name="tel" type="text"  placeholder="tel" >
  </div>
  <div class="col-md-8">
  <input class="teksta" type="textarea" name="laboral" placeholder="experiència laboral">
  </div>
  <div class="col-md-8">
  <input class="teksta" type="textarea" name="academic" placeholder="informació acadèmica">
  </div>
  <div class="col-md-8">
  <input class="teksta" type="textarea" name="curs" placeholder="altres dades i cursos d’interès">
</div><div class="idio">
<div class="col-md-12">
  <input type="radio" name="cat" value="cat">català</select>
  </div>
  <div class="col-md-8">
  <input type="radio" name="cast" value="cast">castellà</select>
  </div>
  <div class="col-md-8">
  <input type="radio" name="ang" value="ang">anglès</select>
  </div>
  <div class="col-md-8">
    <input type="radio" name="id1" value="id1"><input name="id1a" class="tekstp" type="text"  placeholder="altres idiomes" ></select>
    </div>
    <div class="col-md-8">
     <input type="radio" name="id2" value="id2"><input name="id2a" class="tekstp" type="text"  placeholder="altres idiomes" ></select>
</div></div>
<div class="col-md-8">
<input type="submit" name="generar" value="Submit">
</div></div></div>
</form>

 






</body>
</html>

<?php $conn=NULL;

?>