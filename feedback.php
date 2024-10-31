<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user_id = $_POST['user_id'];
    $feedback = $_POST['feedback'];

    
    $hostname = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "Databasereg";

  
    $conn = mysqli_connect($hostname, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $stmt = $conn->prepare("INSERT INTO Feedback (user_id, feedback) VALUES (?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("is", $user_id, $feedback);

    
    if ($stmt->execute()) {
        echo "New feedback created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    mysqli_close($conn);
}
?>


