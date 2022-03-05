<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <div id="containair">
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
            <tr>
                <td style="width: 100px;height:5px;text-align: center;">
                    <?php  echo $row2['codemod'];?>
                </td>

                <td style="height:5px;text-align: center;">
                    <?php  echo $row2['libelle'];?>
                </td>
                <td style=" height:5px;text-align: center;">
                    <?php echo $row2['valeur'];?></td>
            </tr>

        </table>
    </div>
</body>

</html>