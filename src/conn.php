<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Falha ao realizar a conexão: " . $conn->connect_error);
}
echo "Conectado com sucesso";

?>

