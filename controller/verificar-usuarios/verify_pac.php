<?php
    include "../conexion-db/db_connect.php";
    session_start();

    if(isset($_POST['login'])){
        $rol=3;
        $t_doc_pers = $_REQUEST['tipo_doc'];
        $num_doc_pers = $_REQUEST['num_doc_pers'];
        $pass = $_REQUEST['pass'];

        $t_doc_pers =       mysqli_real_escape_string($conectar, $_POST['tipo_doc']);
        $num_doc_pers  =    mysqli_real_escape_string($conectar, $_POST['num_doc_pers']);
        $password   =       mysqli_real_escape_string($conectar, $_POST['pass']);

        //CREAR UNA CONSULTA PARA SABER SI LOS DATOS SON CORRECTOS:

        $consulta = "SELECT * FROM personas WHERE t_doc_pers='$t_doc_pers' AND num_doc_pers='$num_doc_pers'
        AND pass='$pass' AND rol='$rol'";
        

        $resultado = mysqli_query($conectar, $consulta) or die(mysqli_error);

        $fila = mysqli_fetch_assoc($resultado);

        $filas = mysqli_num_rows($resultado);

        
        /*var_dump($filas);
        echo "<br>";
        print_r($filas);
        echo "<br>"; */
       
        if($filas==1){
            $_SESSION['id_pers_pac'] = $fila['id_pers'];
            $_SESSION['t_doc_pers'] = $fila['t_doc_pers'];
            $_SESSION['num_doc_pers'] = $fila['num_doc_pers'];
            $_SESSION['p_nombre_pers'] = $fila['p_nombre_pers'];
            $_SESSION['rol'] = $fila['rol'];
            $_SESSION['s_nombre_pers'] = $fila['s_nombre_pers'];
            $_SESSION['p_apellido_pers'] = $fila['p_apellido_pers'];
            $_SESSION['s_apellido_pers'] = $fila['s_apellido_pers'];
            $_SESSION['tel_pers'] = $fila['tel_pers'];
            $_SESSION['correo_pers'] = $fila['correo_pers'];
            header('Location: ../../view/pacientes/index_pac.php');
        }else{
            header('Location: ../../view/Login/Login_error_datos.php');
        }
    };
?>