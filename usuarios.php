<?Php 
    require_once("db/connection.php");
    include("share/header.php");
?>



<div class="row">
    <!-- Form Crear -->
    <div class="col-6 col-md-4">
        <div class="card card-body">
        <h1 class="mx-auto"><i class="fas fa-user-plus"></i></h1>
            <form action="db/crear_usuario.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre_empleado" placeholder="Nombre" autofocus>
                    <input type="text" name="apellido_empleado" placeholder="Apellido">                
                </div>
                <div class="form-group">
                    <input type="text" name="nombre_usuario" placeholder="Nombre Usuario">
                </div>
                <div class="form-group">
                    <input type="password" name="password1_usuario" placeholder="Contraseña">
                    <input type="password" name="password2_usuario" placeholder="Confirma contraseña">
                </div>
                <div class="form-group">
                    <label for="selectAutor">Selecciona el Rol</label>
                    <select name="rol_usuario" class="form-control" id="selectAutor">
                    <option>empleado</option>                    
                    <option>administrador</option>                  
                    </select>
                </div>
            
                <input type="submit" class="btn btn-success btn-block" name="crear_usuario" value="Añadir">    
            
            </form>
        </div>
    </div>


    <!-- Contenido -->
    <div class="col-12 col-sm-6 col-md-8">

        <h1>Usuarios</h1>

            <table class="table">
                <thead class="thead-dark">

                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    //Query...
                    
                    $query ="SELECT * FROM t_usuario";
                    $result_libros = mysqli_query($connection, $query);
                    // Loop     
                    $i=1;             
                    while($row = mysqli_fetch_array($result_libros)){ ?>
                    <tr>
                    <th scope="row"><?Php echo $i; ?></th>
                    <?php $nombre_autor = $row['nombre'].' '.$row['apellido']; ?>
                    <td><?php echo $nombre_autor; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <td><?php echo $row['usuario']; ?></td>
                    <td>
                    <a href="db/editar_usuario.php?id_usuario=<?php echo $row['id_usuario'] ?>" class="btn btn-info"><i class="far fa-edit"></i></a>

                    <a href="db/borrar_usuario.php?id_usuario=<?php echo $row['id_usuario'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                    
                    </td>
                    </tr>
                    <?php $i++; } ?>
                </tbody>
                </table>
    
    
    </div>
</div>


<?php
include("share/footer.php");
?>