<?php
    include "../../../controller/conexion-db/db_connect.php";

    include "../../../controller/sesiones/sesiones_pac.php";

    $consulta = "SELECT * FROM personas INNER JOIN pacientes ON personas.id_pers = pacientes.id_pac";

    $resultado = mysqli_query($conectar, $consulta) or die(mysqli_error());

    $fila = mysqli_fetch_assoc($resultado);

    $filas = mysqli_num_rows($resultado);

    if($filas == 1){
        
        $_SESSION['id_pac'] = $fila['id_pac'];
        $_SESSION['genero'] = $fila['genero'];
        $_SESSION['fecha_nacimiento'] = $fila['fecha_nacimiento'];
        $_SESSION['creacion'] = $fila['creacion'];
        $_SESSION['actualizacion'] = $fila['actualizacion'];
        $_SESSION['delete'] = $fila['delete'];
    }

?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar contraseña</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../assets/css/estilos.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo">
                <img src="../../assets/images/Logo2.png" alt="">
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../../../assets/images/ajustes.png" alt="">
                    <ul>
                        <li><a href="../index_pac.php">Inicio</a></li>
                        <li><a href="../../Update pacientes/update_pacientes.php">Actualizar datos</a></li>
                        <li><a href="../../../controller/sesiones/cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container__cover">
            <div class="cover">
                <div class="caja3">
                    <h1 class="titulo1">Cambio de contraseña</h1>
                    <div class="contact-wrapper animated bounceInUp">
                        <div class="contact-form">
                            <form action="update_pacientes_alert3.php" method="POST">
                                <p>
                                    <label>Nueva contraseña</label>
                                    <input type="text" name="contra">
                                </p>
                                <p>
                                    <label>Repita contraseña</label>
                                    <input type="text" name="contra">
                                </p>
                                <p class="block">
                                    <button name="update_con" type="submit">
                                        Actualizar
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="../../assets/js-general/menu-responsive.js"></script>
</body>
</html>