<?php
// Database connection parameters
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gatepass';

    // Connect to the database
    $conn = mysqli_connect($hostname, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve data from the database
    $sql = "SELECT * FROM jobnote";
    $result = mysqli_query($conn, $sql);

     echo "<table id='dataTable'>";
    echo "<tr><th>id</th>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
    
        echo "</tr>";
    }
    echo "</table>";

    // Close connection
    mysqli_close($conn);
    
?>