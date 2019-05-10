<?php 
        include("connection.php");
        include("../share/header.php");
     
        
        if (isset($_GET['id'])){
            $id = $_GET['id'];
        
        //Query para leer datos viejos
        
            $query_leer = "SELECT * FROM t_libros WHERE id_libro = $id";
            $result_edit = mysqli_query($connection, $query_leer);
        
            if (mysqli_num_rows($result_edit) == 1 ){
                $row = mysqli_fetch_array($result_edit);
                $title = $row['titulo'];
            }
        }
        
        //Pregunta si tienes valores para actualizar
        
            if(isset($_POST['editar_libro'])){
                $id = $_GET['id'];
                $titulo = $_POST['editar_titulo'];
                $autor = $_POST['editar_autor'];
                $disponible = ($_POST['editar_estado'] == 'on') ? 1 : 0;
        
        // query para actualizar
        
                $query_editar = "UPDATE t_libros set autor_id = '$autor', titulo = '$titulo', estado = '$disponible' WHERE id_libro = $id";
                mysqli_query($connection, $query_editar);
        
        // redirige
        header("Location: ../libros.php");
        }
        
?>

<div class="container">
    <!-- Form Editar -->
        <div class="card card-body">
            <form action="editar_libro.php?id=<?php echo $_GET['id'];?>" method="POST">
                <div class="form-group">
                    <input type="text" name="editar_titulo" placeholder="Nuevo título" value="<?php echo $title; ?>" autofocus>
                </div>
                <div class="form-group">
                    <label for="selectAutor">Selecciona el Autor</label>
                    <select name="editar_autor" class="form-control" id="selectAutor">
                    <?php 
                    //Loop Select
                    $query_autor ="SELECT * FROM t_autores";
                    $result_select_autor = mysqli_query($connection, $query_autor);
                    // Loop     
                    $i=1;             
                    while($row = mysqli_fetch_array($result_select_autor)){ ?>
                    <option><?Php echo $row['id_autor']?></option>
                    <?php 
                    } ?>
                    </select>
                </div>

                <div class="form-group form-check">
                    <input name="editar_estado" type="checkbox" class="form-check-input" id="check1">
                    <label class="form-check-label" for="check1">Disponible</label>
                </div>
            
                <input type="submit" class="btn btn-success btn-block" name="editar_libro" value="Guardar">    
            
            </form>
        </div>
</div>


<?php 

    include("../share/footer.php");

?>