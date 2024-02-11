<?php
// Database connection
$db_host = 'localhost';
$db_user = 'username'; // Replace with your database username
$db_pass = 'password'; // Replace with your database password
$db_name = 'complaints';

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $issue = $_POST['issue']; // Corrected field name
    $branch = $_POST['branch']; // Corrected field name
    $problem = $_POST['problem']; // Corrected field name
    $academicYear = $_POST['academicYear']; // Corrected field name
    $submission_date = $_POST['submission_date']; // Corrected field name

    // Insert complaint into database
    $sql = "INSERT INTO `complaint` (`issue`, `branch`, `problem`, `academicYear`, `submission_date`) VALUES ('$issue', '$branch', '$problem', '$academicYear', '$submission_date')";
    if ($conn->query($sql) === TRUE) {
        echo "Complaint submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>