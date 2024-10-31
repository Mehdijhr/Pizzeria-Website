<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $lastname = $_POST['lastname'];

   
    if (!empty($lastname)) {
       
        $con = mysqli_connect("localhost", "root", "", "Databasereg");

        
        if ($con === false) {
            die("Connection failed: " . mysqli_connect_error());
        }

        
        $query = "SELECT * FROM register WHERE lastname = '$lastname' LIMIT 1";

        
        $result = mysqli_query($con, $query);

       
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_data['user_id'];

            
            if ($user_data['role'] === 'admin') {
                header("Location: admin_dashboard.html");
            } elseif ($user_data['role'] === 'customer') {
                header("Location: customer_dashboard.html");
            } elseif ($user_data['role'] === 'staff') {
                header("Location: staff_dashboard.html");
            } else {
                
                header("Location: default_dashboard.php");
            }
            exit;
        } else {
            echo "User not found!";
        }

       
        mysqli_close($con);
    } else {
        echo "Please enter a lastname!";
    }
}
?>
