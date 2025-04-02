<?php include 'partials/header.php'; ?>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Usuarios</h2>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Nombre</th>
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
        </div>
    </div>

<?php include 'partials/footer.php'; ?>
