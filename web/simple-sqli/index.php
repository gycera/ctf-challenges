<?php
$conn = new mysqli("localhost", "root", "", "ctf");

if ($conn->connect_error) {
    die("Connection failed");
}

$user = $_GET['user'];
$pass = $_GET['pass'];

$query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    echo "Login successful!<br>";
    echo file_get_contents("flag.txt");
} else {
    echo "Invalid credentials";
}
?>
