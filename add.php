<?php
require 'vendor/autoload.php';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Database connection
    $pdo = connectToDatabase();

    // Query to insert a new contact
    $query = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
    $statement = $pdo->prepare($query);
    
    // Execute the query
    $statement->execute();
    
    // Redirect back to the index page
    header('Location: index.php');
    exit;
}

include 'views/add.view.php';
