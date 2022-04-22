<?php
include 'db_connect.php';


function setEntry(string $name, string $phone, string $created_at)
{
    global $conn;
    $sql = "INSERT INTO info (name, phone, created_at) VALUES ('$name', '$phone', '$created_at')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

