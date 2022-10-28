<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>ProyectoMultiusuYei</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://kit.fontawesome.com/1a3d6caaee.js" crossorigin="anonymous"></script>

<style type="text/css">

	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    
  #bottom_newregi{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    background-color: #dde1ef;
    box-shadow: -3px -3px 7px #fff, 3px 3px 5px rgb(94, 104, 121, 0.7);

}
body {
    font-family: 'open sans';
}

.body__edit {
    background-image: url("img/img-6.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<?php 

$id = $_GET['id'];
$conexion = mysqli_connect("bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com", "uhxjobwzbkzkkimo", "b392blez1n8d9gzyXV4p", "bq0blsp5cjqgnsb6of7v") or
die("Problemas con la conexión");
$registros = mysqli_query($conexion, "SELECT * FROM `mainlogin` WHERE id=$id"); 
?>


<body class="body__edit">
   <?php
    if($_POST){
   $a = $_GET['id'];
   $conexion = mysqli_connect("bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com", "uhxjobwzbkzkkimo", "b392blez1n8d9gzyXV4p", "bq0blsp5cjqgnsb6of7v") or
     die("Problemas con la conexión");
    
   $registros = mysqli_query($conexion, "SELECT * FROM `mainlogin`") or
     die("Problemas en el select:" . mysqli_error($conexion));
  
   while ($reg = mysqli_fetch_array($registros)) {
     echo "id:" . $reg['id'] . "<br>";
     echo "username:" . $reg['username'] . "<br>";
     echo "email:" . $reg['email'] . "<br>";
     echo "password:" . $reg['password'] . "<br>";
     echo "role:" . $reg['role'] . "<br>";
     echo "<hr>";
   }
  }
   mysqli_close($conexion);
   ?>
 </body>





<br>
<br>
<div class="login-form">
  <br>
   <?php if($reg = mysqli_fetch_array($registros)) {?>
  <form action="coneditusu.php" method="post" class="form-horizontal" style="background-color:#dde1ef; border-radius:12px; width:100%; ">
  <center><h2 class="titulo_regis">Editar usuario</h2></center>
  <div class="form-group">
      <div class="col-sm-12">
        <input id="bottom_newregi" type="hidden" class="form-control" id="pwd" placeholder="ingrese aqui el id usuario" name="id"  value="<?php echo $reg['id']; ?>" >
      </div>
  </div>
  <div class="form-group">
      <div class="col-sm-12">
        <input id="bottom_newregi" type="hidden" class="form-control" id="pwd" placeholder="ingrese aqui el id usuario" name="role" value="<?php echo $reg['role']; ?>">
      </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-9 text-left">Nombre</label>
      <div class="col-sm-12">
        <input id="bottom_newregi" type="text" class="form-control" id="pwd" placeholder="ingrese aqui el id usuario" name="username"  value="<?php echo $reg['username']; ?>" >
      </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-9 text-left">Email</label>
      <div class="col-sm-12">
        <input id="bottom_newregi" type="text" class="form-control" id="pwd" placeholder="ingrese aqui el id usuario" name="email"  value="<?php echo $reg['email']; ?>" >
      </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-9 text-left">contraseña</label>
      <div class="col-sm-12">
        <input id="bottom_newregi" type="password" class="form-control" id="pwd" placeholder="ingrese aqui el id usuario" name="password"  value="<?php echo $reg['password']; ?>" >
      </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12">
    <input  type="submit"  class="btn btn-success btn-block" value="Guardar cambios">
    <!--<a href="index.php" class="btn btn-danger">Cancel</a>-->
    </div>
</div> 
  </form>

  <?php } ?>
    </div>
</div>