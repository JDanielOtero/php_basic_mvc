<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Usuarios</td>
                <td>Constrasenia</td>
                <td>Nombre</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $user){
                    echo "<tr>";
                    echo "<td>".$user['username']."</td>";
                    echo "<td>".$user['password']."</td>";
                    echo "<td>".$user['nombre']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>