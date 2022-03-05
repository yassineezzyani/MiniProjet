<?php
  
    

?>
<!DOCTYPE html>
<html>

<head>
    <script type="application/javascript" src="javascript/ind.js"> </script>
    <link rel="stylesheet" href="css/verification.css">
</head>

<body>
    <div id="bgd_popup"></div>
    <div>
        <div id="div_btnpr"> <button onclick="pop()" id="btn_pr">Connexion</button></div><br>
        <h1>Bienvenue Sur Notre platforme</h1>
        <form action="verification.php" method="POST" id="btn">
            <button onclick="popclose()">&times;</button><br><br>
            <label for="username" class="label1">code</label>
            <input type="text" name="username" required class="inputcne"><br><br>
            <label for="pass">Password</label>
            <input type="password" name="pass" required><br><br>
            <input type="submit" value="Envoyer"><br><br>
        </form>
    </div>


</body>



</html>