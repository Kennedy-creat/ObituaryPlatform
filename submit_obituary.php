<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obituary_platform";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$date_of_birth = $_POST['date_of_birth'];
$date_of_death = $_POST['date_of_death'];
$content = $_POST['content'];
$author = $_POST['author'];


$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));


$sql = "INSERT INTO obituaries (name, date_of_birth, date_of_death, content, author, slug) 
        VALUES ('$name', '$date_of_birth', '$date_of_death', '$content', '$author', '$slug')";

if ($conn->query($sql) === TRUE) {
    echo "Obituary submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

