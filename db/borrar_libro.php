<?php 
include("connection.php");
include("../share/header.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];

//query para borrar

    $query_delete = "DELETE FROM t_libros WHERE id_libro = $id";
    $result_delete = mysqli_query($connection, $query_delete);
// pregutna si el resultado esta vacío

    if (!$result_delete){
        die("Query Failed");
    } 
    
// redirecciona
    header("Location: http://localhost:8080/wbb/PHP/Proyecto/libros.php");
}


include("../share/footer.php");
?>