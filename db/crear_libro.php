<?php 
    include("connection.php");

    if (isset($_GET['crear_libro'])){


        $title = $_GET['titulo']; 
        $autor = $_GET['autor'];
        $disponible = ($_GET['estado'] == 'on') ? 1 : 0;

//Creo query y result 

        $query = "INSERT INTO t_libros (autor_id, titulo, estado) VALUES ('$autor', '$title', '$disponible')";
        $result = mysqli_query($connection, $query);
        if (!$result){
            die("Query Failed");
        } 
//Redirecciono:
        header("Location: ../libros.php");

    }





?>