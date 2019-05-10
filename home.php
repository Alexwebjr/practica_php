<?php 
    include_once("share/header.php");
?>

<div class="container p-4">

    <div class="row">        
        <div class="col-md-4">
        
           <!--  //if(isset($_SESSION['message'])) { ?>
                <div class="alert alert- //=$_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                //?=$_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>  
             //session_unset(); } ?>  -->
             <h1>Bienvenido, </h1>
            <div class="card card-body">
                <form>
                    <div class="form-group">
                        <input type="text" name="caja_busqueda" id="caja_busqueda" class="form-control" placeholder="Libro o Autor" autofocus>
                    </div>
                </form>
            </div>
        
        </div>

        <div id="datos" class="col-md-8">

        <!--
            <table class="table table-dordered">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Estado</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ?php 
                    
                    $query = "SELECT * FROM t_libros INNER JOIN t_autores ON t_libros.autor_id = t_autores.id_autor ";
                    $resultado = mysqli_query($connection, $query);
                    
                    while($row = mysqli_fetch_array($resultado)){ ?>
                        <tr>
                            <td>?php echo $row['titulo'] ?></td>
                            <td>?php echo $row['nombre']." ".$row['apellido']  ?></td>
                            <td>?php echo $row['estado'] ?></td>
                            <td>
                                <a href="db/editar_libro.php?id=?php echo $row['id'] ?>" class="btn btn-secondary">
                                <i class="far fa-edit"></i>
                                </a>

                                <a href="db/borrarlibro.php?id=?php echo $row['id'] ?> "class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>


                   ?php } ?>
                    
                    
                    
                </tbody>
            </table>   -->     
        </div>    
    </div>
</div>

<?php 
    include_once("share/footer.php");
?>