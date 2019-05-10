<?php 
include("connection.php");
include("../share/header.php");

if (isset($_GET['id_usuario'])){
    $id = $_GET['id_usuario'];

//query para borrar

    $query_delete = "DELETE FROM t_usuario WHERE id_usuario = $id";
    $result_delete = mysqli_query($connection, $query_delete);
// pregutna si el resultado esta vacío

    if (!$result_delete){
        die("Query Failed");
    } 
    
// redirecciona
    header("Location: ../usuarios.php");
}


include("../share/footer.php");
?>