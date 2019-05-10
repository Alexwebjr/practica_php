<?php 
    include("connection.php");

    if (isset($_POST['crear_usuario'])){
        //Pregunta si contraseña coincide
        if ($_POST['password1_usuario'] != $_POST['password2_usuario']){
            echo 'Error en la clave';
            header("Location: ../usuarios.php");
        } else { 

        $nombre = $_POST['nombre_empleado']; 
        $apellido = $_POST['apellido_empleado'];
        $rol = $_POST['rol_usuario'];
        $usuario = $_POST['nombre_usuario']; 
        $password = $_POST['password1_usuario'];


        //Creo query y result 

        $query = "INSERT INTO t_usuario (nombre, apellido, rol, usuario, password) VALUES ('$nombre', '$apellido', '$rol', '$usuario', '$password')";
        $result = mysqli_query($connection, $query);
        if (!$result){
            die("Query Failed");
        } 
        //Redirecciono:
        header("Location: ../usuarios.php");

    }

}





?>