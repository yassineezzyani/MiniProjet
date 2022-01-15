<?php 
$code=$_POST['code'];
$nom=$_POST['Nom'];
$email=$_POST['email'];
$sql="INSERT INTO client Values($code,'$nom','$email')";
if($a->query($sql)==true){
    echo 'succes';
}else{
    echo "error".$sql."<br>".$a->error;
}
?>