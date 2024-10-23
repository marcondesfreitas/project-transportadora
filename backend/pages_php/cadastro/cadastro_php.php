<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transportadora";

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (name, email, passoword) VALUES (?, ?, ?)";

    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $name, $email, $password);

        if($stmt->execute()) {
            echo "cadastro feito";
        } else {
            echo "Error: ". $sql. "<br>". $conn->error;
        }
        $stmt->close();
    }
    $conn->close();
}
?>
