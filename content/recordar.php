
 <?php if ($_POST['password1']!=$_POST['password2'])

            {$error=2;
            }
        $opcions=['cost'=>12,];
        $hash=password_hash($_POST['password1'],PASSWORD_BCRYPT,$opcions);
       




        $stmt=$conn->prepare('INSERT INTO usuaris (mail,password) VALUES (:mail,:password)');

       $rows=$stmt->execute(array(':mail'=>$_POST['mail'],':password'=>$_POST['password1']));




<?php
$stmt = $conn->prepare('INSERT INTO news (titol,contingut,data_publicacio,hora_publicacio,imatge) VALUES (:titol,:contingut,:data_publicacio,:hora_publicacio,:imatge)');
  		$rows=$stmt->execute(array(':titol'=>$_POST['titol'],':contingut'=>$_POST['contingut'],':data_publicacio'=>$date2my,':hora_publicacio'=>$_POST['hora_publicacio'],':imatge'=>$_FILES['imatge']['name']));





	if(isset($_POST['guardar'])){
		$date2my = date('Y-m-d', strtotime($_POST['data_publicacio'])); //Passar data de l'input a format data i reformatar pel mysql
		//Inserir la imatge en el servidor
		if(is_uploaded_file($_FILES['imatge']['tmp_name'])){
			$directori = "../media";
			if (!file_exists($directori)) {
				mkdir($directori, 0777, true);
				}
			if(move_uploaded_file($_FILES['imatge']['tmp_name'],$directori."/".$_FILES['imatge']['name'])){
				echo "imatge inserida correctament...";
			}
			else{
				echo "BOOOOOOOOM!!!!!!! En php adivina quin error retorna!";
			}
		}



/*password*/

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}




    if(isset($_POST['password1'])==(isset($_POST['password2'])&&(isset($_POST['mail'],)) 

        {

} 
  


    (isset($_POST['password1'])==(isset($_POST['password2'])


      ?>


           <?php
            //SCRIPT QUE CARREGA LA PÀGINA INICI

            if(isset($_GET['sec'])){
                $pagina=strtolower($_GET['sec']);
            }
            else{
                $pagina='inici';
            }

            require_once ('content/' . $pagina . '.php');

            ?>



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
