<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "transportadora";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email = ? AND passoword = ?";
        
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $email, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Login feito";
            } else {
                echo "email ou senha incorretos";
            }
            $stmt->close();
        }
    }

    $conn->close();
    ?>