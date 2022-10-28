    <?php 
      if($_POST) {
        $conexion = mysqli_connect("bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com", "uhxjobwzbkzkkimo", "b392blez1n8d9gzyXV4p", "bq0blsp5cjqgnsb6of7v") or
        die("Problemas con la conexión");
    
      mysqli_query($conexion, "insert into mainlogin (id ,username ,email ,password ,role) values 
                           ('$_REQUEST[id]','$_REQUEST[username]','$_REQUEST[email]','$_REQUEST[password]','$_REQUEST[role]')")
        or die("Problemas en el select" . mysqli_error($conexion));
        echo "<script>location.href='personal_portada.php'</script>";
      }
      ?>
