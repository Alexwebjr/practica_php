<?php
require_once("connection.php");


$salida = "";
$query ="SELECT * FROM t_libros INNER JOIN t_autores 
ON t_libros.autor_id = t_autores.id_autor ";

if(isset($_POST['consulta'])){
        $q = $_POST['consulta'];

        $query ="SELECT * FROM t_libros INNER JOIN t_autores ON t_libros.autor_id = t_autores.id_autor WHERE t_autores.nombre LIKE '%".$q."%' OR t_libros.titulo LIKE '%".$q."%' ";
}

$resultado = mysqli_query($connection, $query);

    if ($resultado->num_rows > 0){ 
        $salida.="<table class='table table-dordered'>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>";

        while($row = $resultado->fetch_assoc()){
            $salida.="<tr>
            <td>".$row['titulo']."</td>
            <td>".$row['nombre'].' '.$row['apellido']."</td>
            <td>".$row['estado']."</td>
        </tr>";

        }

        $salida.="</tbody></table>";

    } else {
        $salida.= "No hay datos";
    }


    echo $salida;
//cerramos connection

?>