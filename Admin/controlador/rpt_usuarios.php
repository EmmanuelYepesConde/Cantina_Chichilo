<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/css/archivo.css">

    <title>Ver Registros</title>
</head>

<body>
   <!-- Tabla para ver registros -->
    <table>
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th colspan='2'>Acciones</th>
        </tr>
    <?php 
        include('./conexdb.php');
        $consulta = "SELECT * FROM usuarios ";
        $result = $con->query($consulta);

        while ($row =mysqli_fetch_row($result)) { 
            echo "<tr><td>".$row[0]."</td>"; 
            echo "<td>".$row[1]."</td>"; 
            echo "<td>".$row[2]."</td>"; 
            echo "<td>".$row[3]."</td>"; 
            echo "<td><a href='./modificar_usuario.php?correo=".$row[3]."'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-arrow-clockwise' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z'/>
                        <path d='M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z'/>
                        </svg>
                    </a></td>";
            echo "<td><a href='./borrar_usuario.php?correo=".$row[3]."'>      
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-earmark-x' viewBox='0 0 16 16'>
                        <path d='M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146z'/>
                        <path d='M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z'/>
                        </svg>
                    </a></td></tr>";
        }
        //Liberas el resultado 
        mysqli_free_result($result); 
        //Cerras coneccion 
        mysqli_close($con); 
    ?>
    </table>
<br />
<a href="../index.html">Volver al incio</a>
</body>

</html>