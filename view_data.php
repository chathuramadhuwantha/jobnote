
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
  <div class="search-container" >
    <input type="text" id="searchInput" placeholder="Search...">
    <select id="searchCriteria">
        <option value="branch">Branch</option>
        <option value="branch">Department</option>
        <option value="id">ID</option>
        <option value="itm">Item Name</option>
        
    </select>
    <button onclick="search()">Search</button>
</div>
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

    // Display data in HTML table with CSS styles
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

    

    echo "<table id='dataTable'>";
    echo "<tr><th>ID</th><th>Date</th><th>Branch</th><th>item</th><th>sn</th><th>Asssetcd</th><th>CarryingBy</th><th>EPF</th><th>Desc_fault</th><th>Contact Person</th><th>Contact Number</th><th>Data_time</th></tr>";
   
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["branch"] . "</td>";
        echo "<td>" . $row["item"] . "</td>";
        echo "<td>" . $row["sn"] . "</td>";
        echo "<td>" . $row["Asssetcd"] . "</td>";
        echo "<td>" . $row["CarryingBy"] . "</td>";
        echo "<td>" . $row["epf"] . "</td>";
        echo "<td>" . $row["Desc_fault"] . "</td>";
        echo "<td>" . $row["contactPerson"] . "</td>";
        echo "<td>" . $row["contactNumber"] . "</td>";
        echo "<td>" . $row["Data_time"] . "</td>";
        
        echo "</tr>";
        
    }
    echo "</table>";

   
  ?>

  
 <div style="text-align: center;">
  <form method="post" action="index.html">
    

    <button type="submit" style="background-color: #7AA2E3; /* Green */
 border: 0;
 color: white;
 padding: 15px 32px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 16px;
 margin: 4px 2px;
 cursor: pointer;
 align-content: center;">Loging Page</button>
</div>
</form>



<script>

function search() {
    var input, filter, table, tr, td, i, criteria;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("dataTable");
    tr = table.getElementsByTagName("tr");
    criteria = document.getElementById("searchCriteria").value;
  
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[criteria === 'branch' ? 2 : (criteria === 'id' ? 0 : 3)];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>