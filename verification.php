<?php 
$user=$_POST['username'];
$pass=$_POST['pass'];
if ($user == "admin" && $pass=="yassine" ){
header("location:http://localhost/Gestion_client/Etudiant.php");
}else{
    ?>
<script>
alert("username ou mot pass incorrect ressayer");
window.location.href = 'index.php';
</script>
<?php
 } ?>