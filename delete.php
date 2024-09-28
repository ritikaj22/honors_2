<?php
require 'vendor/autoload.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Database connection
    $pdo = connectToDatabase();

    // Prepare and execute the delete query
    $query = "DELETE FROM contacts WHERE id = :id";
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id);
    $statement->execute();

    // Redirect back to the contacts list
    header('Location: index.php');
    exit;
}
