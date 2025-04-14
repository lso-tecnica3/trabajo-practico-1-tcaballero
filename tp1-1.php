<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <table border=1>
        <tr bgcolor="green">
            <th>X</th>
            <?php 
              for ($fila = 1; $fila <= 10; $fila++) {
                print "<th>$fila</th>";
              }  
            ?>
        </tr>
         <?php
            for ($fila = 1; $fila <= 10; $fila++) { 
                print "<tr>";
                print "<th bgcolor='green'>$fila</th>";
                for ($col = 1; $col <= 10; $col++) {
                    $producto = $fila * $col;
                    print "<td>$producto</td>";
                }    
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>
