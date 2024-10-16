
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: F8F6E3;
    }

    #container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    #companyName {
      font-size: 24px;
      color: #007bff;
      margin-bottom: 20px;
    }

    
    }

    button {
      margin-top: 10px;
      padding: 10px 20px;
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    #jobID {
      margin-top: 20px;
      font-size: 18px;
    }

    .login-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .login-container h2 {
      text-align: center;
    }
    
  </style>
<?php
// Database credentials
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your username
$password = "";            // Replace with your password
$dbname = "gatepass"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT * FROM jobnote WHERE item='CPU'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fetch Data</title>
</head>
<body>
    <h1>Job Notes with Item 'CPU'</h1>

    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table border='1'><tr><th>ID</th><th>Item</th><th>Description</th></tr>";
        while($row = $result->fetch_assoc()) {
          echo "<style>
          table {
              font-family: Arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
          }
          th, td {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
          }
          tr:nth-child(even) {
              background-color: #f2f2f2;
          }
          th {
              background-color: #4CAF50;
              color: white;
          }
          .search-container {
              margin-bottom: 20px;
          }
          .search-container input[type=text] {
              padding: 10px;
              margin-top: 10px;
              font-size: 17px;
              border: none;
              border-bottom: 1px solid #ddd;
          }
          .search-container button {
              padding: 10px 20px;
              margin-top: 10px;
              background: #4CAF50;
              font-size: 17px;
              border: none;
              cursor: pointer;
              color: white;
          }
          .search-container button:hover {
              background: #45a049;
          }
      </style>";
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["item"]. "</td><td>" . $row["sn"]. "</td><td>" . $row["CarryingBy"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
