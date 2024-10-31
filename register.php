<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dbpassword = $_POST['dbpassword'];
    $role = $_POST['role'];

  
    $hostname = "localhost";
    $username = "root";
    $db_password = ""; 
    $dbname = "Databasereg";

    
    $conn = mysqli_connect($hostname, $username, $db_password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    
    $sql = "INSERT INTO register (firstname, lastname, email, dbpassword, role) VALUES (?, ?, ?, ?, ?)";

   
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssss", $firstname, $lastname, $email, $hashed_password, $role);
        
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
       
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    
    mysqli_close($conn);
}
?>

