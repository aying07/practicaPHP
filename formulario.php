<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    //Conexión con PDO

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CursoSQL";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Comprobar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO USUARIO (NOMBRE, APELLIDO, EMAIL) VALUES ('$nombre', '$apellido', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created succesfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();

} else {
    echo "Something went wrong, please try again.";
}
?>
