<?php
    include("conexion.php");
    $conn = conectar();

    $nombre = $_POST['nombre'];
    $apaterno = $_POST['a-paterno'];
    $amaterno = $_POST['a-materno'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];
    $direccion = $_POST['Direccion'];

    $query = "INSERT INTO contactos 
                VALUES(null, '$nombre', '$apaterno', '$amaterno', '$celular', '$correo', '$direccion')";

$ejecutar = mysqli_query($conn, $query);

if($ejecutar){
    Header("Location: ../index.php");
} else {
    echo "Algo Salió Mal!!!!!!";
}

?>
