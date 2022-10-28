<?php 
      if($_POST) {
        $conexion = mysqli_connect("localhost", "root", "", "php_multilogin") or
        die("Problemas con la conexión");
    
      mysqli_query($conexion, "insert into mainlogin (id ,username ,email ,password ,role) values 
                           ('$_REQUEST[id]','$_REQUEST[username]','$_REQUEST[email]','$_REQUEST[password]','$_REQUEST[role]')")
        or die("Problemas en el select" . mysqli_error($conexion));
        mysqli_close($conexion);
        header("location: admin_portada.php");   
      }
      ?>