<?php 
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=certificados', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();;
    }
    $statement = $conexion->prepare('SELECT * FROM usuarios_certificados WHERE usuario = :usuario AND password = :password');
    $statement->execute(array(
        'usuario' => $usuario,
        'password' => $password
    ));

    $resultado = $statement->fetch();
    if ($resultado !== false) {
        $_SESSION['usuario'] = $usuario;
        header('Location: certificados.php');
    }else{
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificados GPS Flota Vilas Motor</title>
</head>
<body>
    
</body>
</html>