<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Colmar-registry2.0";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 

    // Get user input from form 
    $email = $_POST['email']; 
    $password = $_POST['password']; 

    // Check if email and password match in Users table 
    $sql = "SELECT * FROM Users WHERE email='$email' AND password='$password'"; 

    // Execute query and store result in variable 
    $result = $con->query($sql); 

    // If result is not empty, then the user exists in the database 
    if ($result->num_rows > 0) { 

        header('Location: LoginSuccess.html');

    } else { 

        alert("User does not exist!");

    }  

    // Close connection to database  
    mysqli_close($con);  

?>