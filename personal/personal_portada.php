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

<link rel="stylesheet" href="indexps.css">
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
    /* barra de navegacion del usuario */

/* Header */

nav{
    text-align: right;
    padding: 30px 50px 0 0;
	color:white;
}

nav > a{
    color: white;
    font-weight: 400;
    text-decoration: none;
    margin-right: 40px;
	font-size: 28px;
	font-family:  Georgia, serif;
}

nav > a:hover{
    text-decoration: none;
    border-bottom-style: solid;
    border-bottom-color: #dde1ef;
}
body {
    font-family: 'open sans';
}

.contenedor {
    padding: 60px 0;
    width: 100%;
    max-width: 100%;
    margin: auto;
    overflow: hidden;
}

.titulo {
    color: black;
    font-size: 30px;
    text-align: center;
    margin-bottom: 60px;
}

/* Header */

header {
    width: 100%;
    height: 600px;
    background: rgba(36, 36, 36);
    /* fallback for old browsers */
    
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, rgba(0, 0, 0, 0.37), rgba(67, 67, 67 )), url("img/img-9.jpg");
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-size: cover;
    background-attachment: fixed;
    position: relative;
    min-width: 250px;

}


.wave{
    position: absolute;
    bottom: 0;
    width: 100%;
}

header .textos-header{
    display: flex;
    height: 430px;
    width: 100%;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}
.textos-header h2{
    font-size: 40px;
    font-weight: 300;
    color:#fff;
    font-family:'Times New Roman', Times, serif;
}

#bottom_newregi{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    background-color: #dde1ef;
    box-shadow: -3px -3px 7px #fff, 3px 3px 5px rgb(94, 104, 121, 0.7);

}



/* cierre barra de navegacion del usuario */
</style>

</head>


<body>
<header>
        <nav>
            <a href="../cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket" style= "margin-left: 5px"></i></a>
        </nav>
        <section class="textos-header">
        <?php
					
					session_start();

					if(!isset($_SESSION['personal_login']))	
					{
						header("location: ../index.php");
					}

					if(isset($_SESSION['admin_login']))	
					{
						header("location: ../admin/admin_portada.php");
					}

					if(isset($_SESSION['usuarios_login']))	
					{
						header("location: ../usuarios/usuarios_portada.php");
					}
					
					if(isset($_SESSION['personal_login']))
					{
					?>
						<i>  <h2>Bienvenido a rol personal, <?php echo $_SESSION['personal_login'];?></h2></i>
					<?php
					  	
					}
					?>
        </section>
		<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>

			

<!-- hacer una consulta a la base de datos para que el rol de usuario solo visualize la informacion-->



<?php 
    $conexion = mysqli_connect("bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com", "uhxjobwzbkzkkimo", "b392blez1n8d9gzyXV4p", "bq0blsp5cjqgnsb6of7v") or
	  die("Problemas con la conexión");
	     
	  if($_POST){ 
		$accion=$_POST['accion'];
		$id=$_POST['id'];
	
		switch ($accion){
		  case "borrarusuario":
			$registros = mysqli_query($conexion, "delete from mainlogin where id =$id");
			break;
		}
	}
    $registros = mysqli_query($conexion, "SELECT * FROM mainlogin") 
    or die("Problemas en el select" . mysqli_error($conexion)); ?>


<button type="button" style="position:absolute; left:350px;"  class="btn btn-success"  data-toggle="modal" data-target="#exampleModal">Nuevo usuario</button>
<table class="table mx-auto"   style="margin: 100px; margin-lef: 200px; width:70%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">email</th>
      <th scope="col">pasword</th>
      <th scope="col" >TP usuario</th>
      <th scope="col">editar</th>
      <th scope="col">eliminar</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
	  <?php while($reg = mysqli_fetch_array($registros)) {?>   
      <td ><?php echo $reg['id']; ?></td>
	  <td ><?php echo $reg['username']; ?></td>
	  <td  ><?php echo $reg['email']; ?></td>
	  <td><?php echo $reg['password']; ?></td>
	  <td  ><?php echo $reg['role']; ?></td>
	  <td>
      <a class="btn btn-info" href="editar.php?id=<?php echo $reg['id']; ?> "><i class="fa-solid fa-user-pen"></i>Editar</a>
      </td>
       <!--botones el cual nos permite cancelar y aceptar la accion de eliminar un registro de usuario-->
      <td>
      <button type="button" class="btn btn-danger mr-5" id="btnBorrar" onclick="modalEliminar(<?php echo $reg['id']; ?>)"><i class="fa-solid fa-trash-can"></i>Eliminar</button> 
      <div id="<?php echo $reg['id']; ?>" class="w-100 h-100 position-absolute d-none justify-content-center align-items-center yeisongei" id="formularioEliminar">
        <form action="" method="post" class="bg-light h-50 w-25 p-5 d-flex flex-column text-center justify-content-center align-items-center rounded">
          <h2>¿Estás seguro que desea eliminar?</h2>
              <input type="hidden" name="id" value="<?php echo $reg['id']; ?>" id="">
              <div class="d-flex">
                <button type="submit" class="btn btn-danger mr-5" name="accion" value="borrarusuario"><i class="fa-solid fa-trash-can"></i>Eliminar</button> 
                <button type="button" onclick="cancelarBorrar()" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Cancelar</button> 
              </div>
        </form>
      </div>
      </td>  
	</tr>
	<?php } ?>
  </tbody>
</table>




<!-- Modal de registro de usuario -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
  




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









<!--cierre del modal de registro de usuario -->



<!--inicio de estilos del modal-->
<style>
    .yeisongei {
      
      top: 471px;
      left: 0;
      background: rgba(0, 0, 0, .50);

    }
  </style>
<!--cierre de estilos del modal-->


	</body>
</html>








<!--script  en el cual declaramos la funciones para cancelar o eliminar un registro de usuario-->
<script>
     //funcion para cancelar el registro 
     function cancelarBorrar() {

        location.reload(); //cargamos la pagina 

      }
 //declaramos la funcion modalEliminar para realizar la funcion de eliminar el registro
      function modalEliminar(e) {

        const formularioEliminar = document.getElementById(e);
        formularioEliminar.classList.remove('d-none');
        formularioEliminar.style.display = 'flex';

      }

</script>
<!--script  en el cual declaramos la funciones para cancelar o eliminar un registro de usuario-->
