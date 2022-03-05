<?php 
    require 'connection.php';
  
$code=$_POST['cne'];
$nom=$_POST['Nom'];
$prenom = $_POST['prenom'];
$date=$_POST['date']; 
//$date = new DateTime($_POST['date']);
//$datenaiss = $date->format('Y/m/d');
$sql="INSERT INTO etudiant Values('$code','$nom','$prenom','$date')";
if($a->query($sql)==true){

//header("location:http://localhost/Gestion_client/");//priciser la location apres l'action*/
?>
<script>
alert("succes");
window.location.href = 'http://localhost/Gestion_client/Etudiant.php';
</script>
<?php
}else{ 
    ?>
<script>
alert("error");
window.location.href = 'http://localhost/Gestion_client/Etudiant.php';
</script>
<?php
}
?>