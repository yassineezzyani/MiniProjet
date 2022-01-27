<?php 
    require 'connection.php';

$cn = $_POST['cne'];
$code=$_POST['cne'];
$nom=$_POST['Nom'];
$prenom = $_POST['prenom'];
$date=$_POST['date'];
$sql="INSERT INTO etudiant Values($code,'$nom','$prenom','$date')";
if($a->query($sql)==true){
echo 'succes';
}else{
echo "error".$sql."<br>".$a->error;
}
?>