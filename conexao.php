<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_satisfacao";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
echo "Connectado com sucesso!!!"; 
?>