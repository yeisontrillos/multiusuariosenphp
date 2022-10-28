<?php
    $id=(isset($_POST['id']))?$_POST['id']:"";
    $username=(isset($_POST['username']))?$_POST['username']:"";
    $email=(isset($_POST['email']))?$_POST['email']:"";
    $password=(isset($_POST['password']))?$_POST['password']:"";
    $role=(isset($_POST['role']))?$_POST['role']:"";
    

    $conexion = mysqli_connect("bq0blsp5cjqgnsb6of7v-mysql.services.clever-cloud.com", "uhxjobwzbkzkkimo", "b392blez1n8d9gzyXV4p", "bq0blsp5cjqgnsb6of7v") or
    die("Problemas con la conexión");

        $registros =mysqli_query($conexion," UPDATE mainlogin SET `username`='$username',`email`='$email',`password`='$password',`role`='$role' WHERE id=$id");   

    header ("location: personal_portada.php");

    ?>



