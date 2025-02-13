<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "gatepass";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $date = $_POST["date"];
    $branch = $_POST["branch"];
    $carrying_by = $_POST["CarryingBy"];
    $contact_person = $_POST["contactPerson"];
    $contact_number = $_POST["contactNumber"];
    $epf = $_POST["epf"];
    $items = $_POST["itm"];
    $serial_numbers = $_POST["sn"];
    $asset_codes = $_POST["Asssetcd"];
    $descriptions = $_POST["Desc_fault"];

    // Insert data into the database
    foreach ($items as $key => $item) {
        $sql = "INSERT INTO jobnote (date, branch, item, sn, Asssetcd, CarryingBy, epf, Desc_fault, contactPerson, contactNumber) VALUES ('$date', '$branch', '$item','$serial_numbers[$key]','$asset_codes[$key]','$carrying_by','$epf','$descriptions[$key]', '$contact_person', '$contact_number')";
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>
