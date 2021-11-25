<?php 
include('conexdb.php');

$correo = $_GET['correo'];

$buscarUsuario = "SELECT * FROM usuarios
 WHERE email = '$correo' ";
$estado ='';
 $result = $con->query($buscarUsuario);
 while ($row =mysqli_fetch_row($result)) {
    
    echo "<form action='#' Method='POST'> 
        <label>Nombres: </label><input type='text' name='nombres' value='".$row[1]."'>
        <label>Apellidos: </label><input type='text' name='apellidos' value='".$row[2]."'>
        <label>Correo: </label><input type='text' name='correo' value='".$row[3]."'>
            <br /><br /><br />
            <input type='submit' name='Enviar' value='Enviar' />
            <input type='reset' name='Cancelar' value='Cancelar' />
        </form>";
 }
        if(isset($_POST['nombres'])){
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos'];
            $correo1 = $_POST['correo'];           
            $query = "update usuarios set nombre='".$nombres."', apellidos='".$apellidos."', 
            email='".$correo1."' where email = '".$correo."'";
            
            if ($con->query($query) === TRUE) {
                echo "<br />" . "<h2>" . "Usuario Actualizado Exitosamente!" . "</h2>";
                echo "<h4>" . "Bienvenido: " . $nombres . "</h4>" . "\n\n";
                echo "<h5>" . "Regresar: " . "<a href='../index.html'>Inicio</a>" . "</h5>";
                echo "<h5>" . "Actualizar otro usuario: " . "<a href='./rpt_usuarios.php'>Ver tabla de Registros</a>" . "</h5>";
             }else{
                echo "Error al actualizar el usuario." . $query . "<br>" . $con->error; 
             }
        
        }

?>        

<br />
    <a href="../index.html">Volver a Inicio</a>