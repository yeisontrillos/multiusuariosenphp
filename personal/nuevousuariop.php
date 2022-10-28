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

<body class="body__edit">
    


<div class="login-form">  
<form action="conexionreg.php" method="post" class="form-horizontal" style="background-color:#dde1ef; border-radius:12px; width:100%; ">
<center><h2 class="titulo_regis">Registrarse</h2></center>
<div class="form-group">
<label  class="col-sm-9 text-left">Usuario</label>
<div class="col-sm-12">
<input id="bottom_newregi" type="text" name="username" class="form-control" placeholder="Ingrese usuario" />
</div>
</div>

<div class="form-group">
<label class="col-sm-9 text-left">Email</label>
<div class="col-sm-12">
<input id="bottom_newregi" type="text" name="email" class="form-control" placeholder="Ingrese email" />
</div>
</div>
    
<div class="form-group">
<label class="col-sm-9 text-left">Password</label>
<div class="col-sm-12">
<input id="bottom_newregi" type="password" name="password" class="form-control" placeholder="Ingrese password" />
</div>
</div>
    
<div class="form-group">
    <label class="col-sm-9 text-left">Seleccione tipo</label>
    <div class="col-sm-12">
    <select id="bottom_newregi" class="form-control" name="role">
        <option value="" selected="selected"> - seleccione rol - </option>
        <!--<option value="admin">Admin</option>-->
        <option value="personal">Personal</option>
        <option value="usuarios">Usuarios</option>
    </select>
    </div>
</div>

<div class="form-group">
  <div class="col-sm-12">
  <input  type="submit" name="btn_register" class="btn btn-success btn-block" value="Registrar">
  <!--<a href="index.php" class="btn btn-danger">Cancel</a>-->
  </div>
</div> 
</form>
</div>
</html>
</body>