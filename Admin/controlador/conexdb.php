<?php
//variable de entradas bases de datos

$host= "127.0.0.1";//servidor al que nos vamos a conectar.

$port="";//puerto en el que va configurada la base de datos.

$user= "root";//significa raiz : quiere decir que ese es el usuario para la base de datos.

$password= "";//es la contraseña para la conexion de base de datos.

$dbname="chichilo";//nombre de la base de datos.

if (!($con = new mysqli($host,$user,$password,$dbname))){
    die('No se pudo conectar con la base de datos. ' .mysqli_connect_error());
} else {
    echo "";
}
?>