<?php 
  require 'connection.php';
  $sql = "Select * from etudiant";
  $resultat = mysqli_query($a,$sql);
  if($resultat->num_rows > 0) {
    if($row = $resultat->fetch_assoc()) {
      $cne = $row["cne"];
      $nom = $row["nom"];
      $prenom = $row["prenom"];
       $datenaiss = $row["dateNaissance"];
       
//$datenaiss = $date->format('Y/m/d');
    }
  }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/Etudiant.css">
</head>

<body>

    <a href="listenotes.php/?id=<?php echo $cne; ?>"><input type="button" value="liste_note" id="inputliste"></a>
    <form action="ajout_etudiant.php" method="POST" onsubmit="return confirm('vous voulez envoyer le formulaire')"><br>
        <label for=" CNE">Code</label>
        <input type="text" name="cne" id="inputcne" value=<?php echo $cne ?>><br><br>
        <label for="Nom">Nom</label>
        <input type="text" onblur="validercne(this.value)" name="Nom" id="inputnom" value=<?php echo $nom ?>><br><br>
        <label for="Prenom">Prenom</label>
        <input type="text" name="prenom" id="inputprenom" required value=<?php echo $prenom ?>><br><br>
        <label for="date">Date Naiss</label>
        <input type="Date" name="date" id="inputdate" required value=<?php echo  $datenaiss ?>><br><br>
        <input type="submit" value="Ajouter" id="inputajouter">
    </form>

    <script type="application/javascript" src="javascript/etd.js"></script>

</body>

</html>