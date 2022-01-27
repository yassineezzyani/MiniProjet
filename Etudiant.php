<?php 

?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <form action="ajout_etudiant.php" method="POST">
        <label for="CNE">code</label><br>
        <input type="text" name="cne" required><br>
        <label for="Nom">Nom</label><br>
        <input type="text" name="Nom" required><br>
        <label for="Prenom">Prenom</label><br>
        <input type="text" name="prenom" required><br>
        <label for="date">Date Naiss</label><br>
        <input type="Date" name="date" required><br><br>
        <input type="submit" value="Ajouter"><br><br>
        <a href="http://localhost/gestion_client/post.php?cne="><input type="button" value="liste_note"></a>
    </form>

</body>

</html>