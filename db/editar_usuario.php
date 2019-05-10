<?php 
        include("connection.php");
        include("../share/header.php");
     
        
        if (isset($_GET['id_usuario'])){
            $id = $_GET['id_usuario'];
        
        //Query para leer datos viejos
        
            $query_leer = "SELECT * FROM t_usuario WHERE id_usuario = $id";
            $result_edit = mysqli_query($connection, $query_leer);
        
            if (mysqli_num_rows($result_edit) == 1 ){
                $row = mysqli_fetch_array($result_edit);
                $nombre_viejo = $row['nombre'];
                $apellido_viejo = $row['apellido'];
                $rol_viejo = $row['rol'];
                $usuario_viejo = $row['usuario'];
            }
        }
        
        //Pregunta si tienes valores para actualizar
        
            if(isset($_POST['btn_editar_usuario'])){
                $id = $_GET['id_usuario'];
                $nombre_nuevo = $_POST['editar_nombre'];
                $apellido_nuevo = $_POST['editar_apellido'];
                $rol_nuevo = $_POST['editar_rol'];
                $usuario_nuevo = $_POST['editar_usuario'];
        
        // query para actualizar
        
                $query_editar = "UPDATE t_usuario set nombre = '$nombre_nuevo', apellido = '$apellido_nuevo', rol = '$rol_nuevo', usuario = '$usuario_nuevo' WHERE id_usuario = $id";
                mysqli_query($connection, $query_editar);
        
        // redirige
        header("Location: ../usuarios.php");
        }
        
?>

<div class="container">
    <!-- Form Editar -->
        <div class="card card-body">
            <form action="editar_usuario.php?id_usuario=<?php echo $_GET['id_usuario'];?>" method="POST">
                <div class="form-group">
                    <input type="text" name="editar_nombre" placeholder="Nuevo nombre" value="<?php echo $nombre_viejo; ?>" autofocus>
                    <input type="text" name="editar_apellido" placeholder="Nuevo apellido" value="<?php echo $apellido_viejo; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="editar_usuario" placeholder="Nuevo usuario" value="<?php echo $usuario_viejo; ?>">
                </div>
                <div class="form-group">
                    <label for="selectAutor">Selecciona el Rol</label>
                    <select name="editar_rol" class="form-control" id="selectAutor">
                    <option>empleado</option>                    
                    <option>administrador</option>                  
                    </select>
                </div>

                <input type="submit" class="btn btn-success btn-block" name="btn_editar_usuario" value="Guardar">    
            
            </form>
        </div>
</div>


<?php 

    include("../share/footer.php");

?>