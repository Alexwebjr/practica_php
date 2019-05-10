<?php 
/*CONECTION -------------------------------

$connection = mysqli_connect(
    'nombre de servidor',
    'nombre de usuario',
    'contraseña',
    'nombre db' );
*/

/* CREATE ------------------------------------------------------------------------------------------------

- incluyo connection = include("db.php");

- Capturo datos con form via POST

- Pregunto si tiene datos el post enviado por el btn:save_task
    if (isset($_POST['save_task'])){

- Declaro variables a crear:

        $title = $_POST['title']; 
        $description = $_POST['description'];
- Creo query y result
        $query = "INSERT INTO task (variables) VALUES ('$variables')";
        $result = mysqli_query($connection, $query);
        if (!$result){
            die("Query Failed");
        }

- Redirecciono:
        header("Location: index.php");
    }
*/


/* READ ------------------------------------------------------------------------------------
- Creo tabla
    <tbody>
 - Creo query and Result
               <?php 
                    $query = "SELECT * FROM task";
                    $result_task = mysqli_query($connection, $query);
- Loop                  
                    while($row = mysqli_fetch_array($result_task)){ ?>
                        <tr>
                            <td><?php echo $row['variables'] ?></td>
                            <td>
  - enlaces edit y eliminar
                                <a href="edit_task.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                <i class="far fa-edit"></i>
                                </a>

                                <a href="delete_task.php?id=<?php echo $row['id'] ?> "class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                        
*/

/* UPDATE ------------------------------------------------------------------------------------
- Incluye conection
        include("db.php");
- Pregunta si capturas id

    if (isset($_GET['id'])){
        $id = $_GET['id'];

- Query para leer datos viejos

        $query = "SELECT * FROM task WHERE id = $id";
        $result_edit = mysqli_query($connection, $query);

- Pregunta si tiene datos y crea variables para llenar el form con datos viejos

        if (mysqli_num_rows($result_edit) == 1 ){
            $row = mysqli_fetch_array($result_edit);
            $title = $row['title'];
            $description = $row['description'];
        }
    }

- Pregunta si tienes valores para actualizar

    if(isset($_POST['update'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

- query para actualizar

        $query = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($connection, $query);

- redirige
        header("Location: index.php");
    }

- Incluye header, footer, From con datos viejos que envia datos aquí, y Boton actualizar




-HTML
<div class="container p-4">
- Incluir footer
*/







/* DELETE ---------------------------------------------------------------------------------------

- incluye conection
- pregunta si trajo id y crealo
    
    if (isset($_GET['id'])){
        $id = $_GET['id'];

- query para borrar

        $query = "DELETE FROM task WHERE id = $id";
        $result_delete = mysqli_query($connection, $query);

- pregutna si el resultado esta vacío

        if (!$result_delete){
            die("Query Failed");
        } 
        
- redirecciona
        header("Location: index.php") o ("Location http://local.....");
    }

*/



?>