<?Php 
    require_once("db/connection.php");
    include("share/header.php");
?>



<div class="row">
    <!-- Form Crear -->
    <div class="col-6 col-md-4">
        <div class="card card-body">
            <form action="db/crear_libro.php" method="GET">
                <div class="form-group">
                    <input type="text" name="titulo" placeholder="Título" autofocus>
                </div>
                <div class="form-group">
                    <label for="selectAutor">Selecciona el Autor</label>
                    <select name="autor" class="form-control" id="selectAutor">
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
                    <input name="estado" type="checkbox" class="form-check-input" id="check1">
                    <label class="form-check-label" for="check1">Disponible</label>
                </div>
            
                <input type="submit" class="btn btn-success btn-block" name="crear_libro" value="Añadir Libro">    
            
            </form>
        </div>
    </div>


    <!-- Contenido -->
    <div class="col-12 col-sm-6 col-md-8">

        <h1>Libros</h1>

            <table class="table">
                <thead class="thead-dark">

                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    //Query...
                    
                    $query ="SELECT * FROM t_libros INNER JOIN t_autores 
                            ON t_libros.autor_id = t_autores.id_autor ";
                    $result_libros = mysqli_query($connection, $query);
                    // Loop     
                    $i=1;             
                    while($row = mysqli_fetch_array($result_libros)){ ?>
                    <tr>
                    <th scope="row"><?Php echo $i; ?></th>
                    <td><?php echo $row['titulo']; ?></td>
                    <?php $nombre_autor = $row['nombre'].' '.$row['apellido'] ?>
                    <td><?php echo $nombre_autor; ?></td>
                    <td><?php echo $disponibilidad = ($row['estado'] != 0 ) ? 'Disponible': 'Ausente'; ?></td>
                    <td>
                    <a href="db/editar_libro.php?id=<?php echo $row['id_libro'] ?>" class="btn btn-info"><i class="far fa-edit"></i></a>

                    <a href="db/borrar_libro.php?id=<?php echo $row['id_libro'] ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                    
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