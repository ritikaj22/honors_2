<?php

function connectToDatabase()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', 'password'); // Ensure this matches your DB credentials
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

function dd($var)
{
    var_dump($var);
    exit;
}

function selectAll($table)
{
    $pdo = connectToDatabase();
    
    $query = 'SELECT * FROM ' . $table;

    $statement = $pdo->prepare($query);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, \Models\Contact::class);
}
