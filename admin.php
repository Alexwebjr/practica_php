<?php 
    include_once("share/header.php");

?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <form action="login.php" method="POST">
                <div class="form-group">                    
                    <input type="text" class="form-control" id="idusuario" aria-describedby="userHelp" placeholder="Usuario">
                </div>
                <div class="form-group">                   
                    <input type="password" class="form-control" id="idpassword" placeholder="Password">
                </div>               
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<?php 
    include_once("share/footer.php");
?>