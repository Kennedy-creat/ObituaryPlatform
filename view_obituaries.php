<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obituary_platform";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT name, date_of_birth, date_of_death, content, author, submission_date FROM obituaries";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Name</th><th>Date of Birth</th><th>Date of Death</th><th>Content</th><th>Author</th><th>Submission Date</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["date_of_birth"]."</td><td>".$row["date_of_death"]."</td><td>".$row["content"]."</td><td>".$row["author"]."</td><td>".$row["submission_date"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
