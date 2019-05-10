<?php 

/*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica Crud Productos</title>
    <!-- CSS de Bootstrap-------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome-------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
<!-- FROM-------->
<div class="row">
    <div class="col-4">

        <div class="card card-body">
            <form action="crear_producto.php" method="POST">
                <div class="form-group">
                    <input type="text" name="nombre" placeholder="Nombre" autofocus>
                </div>
                <div class="form-group">    
                    <textarea name="descripcion" class="form-control" placeholder="Describa el producto"></textarea>  
                </div>
                <div class="form-group"> 
                    <input type="number" name="cantidad" class="form-control" placeholder="Cantidad">
                </div>
            
                <div class="form-group"> 
                    <input type="number" name="precio" min="1" step="0.01" class="form-control" placeholder="Precio">    
                </div> 
                <input type="submit" class="btn btn-success btn-block" name="crear_producto" value="Crear Producto">    
            
            </form>
        </div>
    </div>


<!-- TABLE-------->

<div class="col-8">
        <table class="table table-dordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $query = "SELECT * FROM productos";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td><?php echo $row['cantidad'] ?></td>
                            <td><?php echo $row['precio'] ?></td>
                        </tr>
                </tbody>
        </table> 
    </div>
</div>




<!-- JS de Bootstrap-------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

*/

?>