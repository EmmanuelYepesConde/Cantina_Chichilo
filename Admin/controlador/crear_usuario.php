<?php
   
   include('conexdb.php');

   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $email = $_POST['email'];
   $password = hash('sha512','73b0c0eeb6e3b347a4c32822293c71c72dafa8f5b08961c1811ab4025fdf06a5dbf27b3b3200a7731b65ca36ff80a743'.$password);

   $buscar_usuario = "SELECT * FROM usuarios
   
   WHERE email = '$email' ";
   
   $resultado = $con->query($buscar_usuario);

   $count = mysqli_num_rows($resultado);

   if ($count == 1){
    echo "<br />". "El usuario ya ha sido creado. ". "<br />";
    echo "<a href='../insertar_usuario.php> Por favor ingrese otra infromacion </a>";

   }else {
       $query = "INSERT INTO usuarios (nombre, apellidos, email, password) VALUES ('".$nombre."'  ,  '".$apellidos."'  ,  '".$email."'  ,  '".$password."')";
       
       if ($con->query($query) === TRUE){
           echo "<br />" . "<h2>" . "Usuario creado exitosamente" . "</h2>";
           echo "<h4>" . "Bienvenido: " .$nombre . "</h4>" . "\n\n";
           echo "<h3>" . "Ver tabla de registros: " . "<a href='../tables.php'> VER REGISTROS</a>" . "</h3>";
           echo "<h5>" . "Registrar otro usuario: " . "<a href='../register.php'>Insertar otro usuario</a>" . "</h5>";

       }else {
           echo "Error al crear usuario." . $query . "<br>" . $con->error;
       }
   }

   mysqli_close($con);
   
?>

