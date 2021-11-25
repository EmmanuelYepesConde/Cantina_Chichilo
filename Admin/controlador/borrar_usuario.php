<?php 
//Generamos la conexión a la base de datos por medio de de la importación de conex.php
include('conexdb.php');

//obtenemos la variable para la ejecución y busqueda del registro
$correo = $_GET['correo'];

//REalizamos el query de eliminacion del registro 
$buscarUsuario = "delete FROM usuarios WHERE email = '$correo' ";

//Ejecutamos y validamos la instrucción
if($con->query($buscarUsuario)=== TRUE){
    echo "<br />" . "<h2>" . "Registro Eliminado Exitosamente!" . "</h2>";
    echo "<h5>" . "Regresar: " . "<a href='../index.php'>Inicio</a>" . "</h5>";
    echo "<h5>" . "Volver a la tabla de registros: " . "<a href='../tables.php'>Ver tabla de Registros</a>" . "</h5>";
}else{
    echo "Error al Eliminar el Registro." . $query . "<br>" . $con->error; 
    echo "<h5>" . "Regresar: " . "<a href='../index.php'>Inicio</a>" . "</h5>";
}
 
//Cerramos la conexión a la base de datos
mysqli_close($con);
?>
