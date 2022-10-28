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
    width: 90%;
    max-width: 1000px;
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
    background: linear-gradient(to right, rgba(0, 0, 0, 0.37), rgba(67, 67, 67 )), url("img/img-10.jpg");
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-size: cover;
    background-attachment: fixed;
    position: relative;
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
/* cierre barra de navegacion del usuario */
</style>

</head>
	<body>
	
	<header>
        <nav>
            <a href="../cerrar_sesion.php"><i class="fa-solid fa-arrow-right-from-bracket" style= "margin-left: 5px"></i></a>
        </nav>
        <section class="textos-header">
        <i>  <h2>Bienvenido a rol de usuario</h2></i>
        </section>
		<div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>


				<?php
				
				session_start();

				if(!isset($_SESSION['usuarios_login']))	
				{
					header("location: ../index.php");
				}

				if(isset($_SESSION['admin_login']))	
				{
					header("location: ../admin/admin_portada.php");
				}

				if(isset($_SESSION['personal_login']))	
				{
					header("location: ../personal/personal_portada.php");
				}

				if(isset($_SESSION['user_login']))
				{
				?>
					Bienvenidos,
				<?php
						echo $_SESSION['usuarios_login'];
				}
				?>
	</div>
			
	<!-- hacer una consulta a la base de datos para que el rol de usuario solo visualize la informacion-->



<?php 
    $conexion = mysqli_connect("bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com", "uhxjobwzbkzkkimo", "b392blez1n8d9gzyXV4p", "bq0blsp5cjqgnsb6of7v") or
	  die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "SELECT * FROM mainlogin") 
    or die("Problemas en el select" . mysqli_error($conexion)); ?>






<table class="table mx-auto "   style="margin: 100px; margin-lef: 200px; width:70%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">email</th>
      <th scope="col">pasword</th>
	  <th scope="col">tipo usuario</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  <?php while($reg = mysqli_fetch_array($registros)) {?>   
      <td><?php echo $reg['id']; ?></td>
	  <td><?php echo $reg['username']; ?></td>
	  <td><?php echo $reg['email']; ?></td>
	  <td><?php echo $reg['password']; ?></td>
	  <td><?php echo $reg['role']; ?></td>
    </tr>
	<?php } ?>
  </tbody>
</table>




	</body>
</html>