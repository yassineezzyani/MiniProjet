<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <a href=" http://localhost/Gestion_client/" id="sortir"><button>&times;
        </button></a>

    <?php

$id = $_GET['id'] ;
require 'connection.php';
$sql="SELECT nom,prenom FROM etudiant WHERE cne ='$id'";
$result=mysqli_query($a,$sql);
if($a->query($sql)==true){
    while ($row = mysqli_fetch_assoc($result)){
        // fetch pour chercher
        echo ("<h1 style='text-align:center'>"."la note d'etudiant" ."  " .$row['nom']." ".$row['prenom']."</h2>"."<br>");
    }
    }else{
    echo "error".$sql."<br>".$a->error;
    }

    ?>
    <table border="2" style="text-align: center;">

        <tr>
            <td style="height:5px;text-align: center;">
                <h3>Codemodule</h3>
            </td>
            <td style="height:5px;text-align: center;">
                <h3>lebelle</h3>
            </td>
            <td style="height:5px;text-align: center;">
                <h3>valeur</h3>
            </td>
        </tr>



        <?php $sql2="SELECT m.codemod,n.libelle,n.valeur FROM note n, module m,etudiant e where n.codemod=m.codemod and e.cne='$id' LIMIT 1" ;
           $result2=mysqli_query($a,$sql2); if($a->query($sql2)==true){
           while ($row2=mysqli_fetch_assoc($result2)){
        echo ' <tr>
        <td style="width: 100px;height:5px;text-align: center;">
           '. $row2['codemod'].'
    </td>'.'

    <td style="height:5px;text-align: center;">'. $row2['libelle'].'</td>
    <td style=" height:5px;text-align: center;">'.
     $row2['valeur']
    .'</tr>    </table>';
    }
    }

    ?>
</body>

</html>