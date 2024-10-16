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

    // Retrieve the latest ID from the database
    $sql = "SELECT id FROM jobnote ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);

    // Fetch the latest ID
    $latest_id = mysqli_fetch_assoc($result)['id'];

    // Close the database connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Defective Computer Item Return Form</title><style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
 
    
    
  }
  table {
  color: black;
  
}
  form {
    height:  240mm;
    width: 210mm;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #ffffff;
    
  }
  
  h1, h2 {
    text-align: center;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
    
  
  }
  
  input[type="text"],
  input[type="tel"],
  input[type="date"],
  select,
  textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #ffffff;
  }
  


  button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: center;
  }
  
  th {
  background-color: #f2f2f2;
  color: #333;
  font-weight: bold;
  text-align: left;
  border-bottom: 2px solid #ccc;
  padding: 10px 20px;
}

  button[type="submit"]:hover {
    background-color: #45a049;
  }
  
 

    .logos {
        display: flex;
        justify-content: space-between;
    }
    .logos img {
        margin: auto;
    }
    
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
</head>
<body>
    


    

  
    <div class="logos">
    <img src="genlogo.png"  alt="lifelogo" width="75px" height="75px" ></div>
    <h1 align="center">Co-operative Insurance Company PLC</h1>
    <h2 align="center" style="padding: auto;">Defective Computer Items returning to IT Department</h2>
  <form action="save_Data.php" method="post" id ="form01">
  <h3>Job Id:<?php echo $latest_id+1; ?></h3>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" placeholder="Select Date" required> <br>
    <label  for="branch">Department /Branch /MPCS:</label>
    <select id="branch" name="branch" required >
        <option value=""> ------ </option>
        <option value="mktdpt">Marketing Department</option>
        <option value="Broker/Corporate_Department">Broker/Corporate Department</option>
        <option value="Admin_DPT">Administration Department</option>
        <option value="Legal_DPT">Legal Department</option>
        <option value="HR_DPT">Human Resource Department</option>
        <option value="Finance_DPT">Finance Department</option>
        <option value="Training_DPT">Training Department</option>
        <option value="IT_DPT">Information Technology Department</option>
        <option value="Iaudit_DPT">Internal Audit Department</option>
        <option value="Motor_DPT">Motor Department</option>
        <option value="Claim_DPT">Motor Claim Department</option>
        <option value="Fast_Track_DPT">Fast Track Unit – Motor Claim</option>
        <option value="Non_motor_DPT">Non Motor Department</option>
        <option value="Non_motor_Claim_DPT">Non Motor Claim Department</option>
        <option value="----Branch-----">----Branch-----</option>
        <option value="Akuressa">Akuressa</option>
  <option value="Akkaraipattu">Akkaraipattu</option>
  <option value="Anamaduwa">Anamaduwa</option>
  <option value="Ambalangoda">Ambalangoda</option>
  <option value="Ambalantota">Ambalantota</option>
  <option value="Aluthgama">Aluthgama</option>
  <option value="Ampara">Ampara</option>
  <option value="Anuradhapura">Anuradhapura</option>
  <option value="Avissawella">Avissawella</option>
  <option value="Badulla">Badulla</option>
  <option value="Balangoda">Balangoda</option>
  <option value="Batticaloa">Batticaloa</option>
  <option value="Bandarawela">Bandarawela</option>
  <option value="Battaramulla">Battaramulla</option>
  <option value="Baddegama">Baddegama</option>
  <option value="Bibila">Bibila</option>
  <option value="Chilaw">Chilaw</option>
  <option value="City">City</option>
  <option value="Colombo Metro">Colombo Metro</option>
  <option value="Chunnakam">Chunnakam</option>
  <option value="Dambulla">Dambulla</option>
  <option value="Ganemulla">Ganemulla</option>
  <option value="Dankotuwa">Dankotuwa</option>
  <option value="Deniyaya">Deniyaya</option>
  <option value="Dehiwala">Dehiwala</option>
  <option value="Dehiattakandiya">Dehiattakandiya</option>
  <option value="Digana">Digana</option>
  <option value="Divulapitiya">Divulapitiya</option>
  <option value="Eheliyagoda">Eheliyagoda</option>
  <option value="Elpitiya">Elpitiya</option>
  <option value="Embilipitiya">Embilipitiya</option>
  <option value="Galle">Galle</option>
  <option value="Galewela">Galewela</option>
  <option value="Gampaha">Gampaha</option>
  <option value="Gampola">Gampola</option>
  <option value="Galenbindunuwewa">Galenbindunuwewa</option>
  <option value="Giriulla">Giriulla</option>
  <option value="Hatton">Hatton</option>
  <option value="Homagama">Homagama</option>
  <option value="Ja-Ela">Ja-Ela</option>
  <option value="Horana">Horana</option>
  <option value="Jaffna">Jaffna</option>
  <option value="Kadawatha">Kadawatha</option>
  <option value="Kalawana">Kalawana</option>
  <option value="Kaduwela">Kaduwela</option>
  <option value="Kaluthara">Kaluthara</option>
  <option value="Kandy">Kandy</option>
  <option value="Kanthale">Kanthale</option>
  <option value="Katugastota">Katugastota</option>
  <option value="Kalmunai">Kalmunai</option>
  <option value="Kalpitiya Sub">Kalpitiya Sub</option>
  <option value="Kamburupitiya Sub">Kamburupitiya Sub</option>
  <option value="Karapitiya">Karapitiya</option>
  <option value="Kegalle">Kegalle</option>
  <option value="Kekirawa">Kekirawa</option>
  <option value="Kelaniya">Kelaniya</option>
  <option value="Kolonnawa">Kolonnawa</option>
  <option value="Kiribathgoda">Kiribathgoda</option>
  <option value="Kilinochchi">Kilinochchi</option>
  <option value="Kuliyapitiya">Kuliyapitiya</option>
  <option value="Kirindiwela">Kirindiwela</option>
  <option value="Kurunegala">Kurunegala</option>
  <option value="Kurunegala North">Kurunegala North</option>
  <option value="Maharagama">Maharagama</option>
  <option value="Mahiyanganaya">Mahiyanganaya</option>
  <option value="Malabe">Malabe</option>
  <option value="Mathugama">Mathugama</option>
  <option value="Mannar">Mannar</option>
  <option value="Mawanella Sub">Mawanella Sub</option>
  <option value="Matale">Matale</option>
  <option value="Melsiripura">Melsiripura</option>
  <option value="Medawachchiya">Medawachchiya</option>
  <option value="Matara">Matara</option>
  <option value="Minuwangoda">Minuwangoda</option>
  <option value="Metro">Metro</option>
  <option value="Monaragala">Monaragala</option>
  <option value="Moratuwa">Moratuwa</option>
  <option value="Mullaitive">Mullaitive</option>
  <option value="Negombo">Negombo</option>
  <option value="Narammala">Narammala</option>
  <option value="Nelliady">Nelliady</option>
  <option value="Neluwa">Neluwa</option>
  <option value="Nikaweratiya">Nikaweratiya</option>
  <option value="Nittambuwa">Nittambuwa</option>
  <option value="Nochchiyagama">Nochchiyagama</option>
  <option value="Nugegoda">Nugegoda</option>
  <option value="Nugegoda South">Nugegoda South</option>
  <option value="Nuwara Eliya">Nuwara Eliya</option>
  <option value="Padiyathalawa">Padiyathalawa</option>
  <option value="Pilimathalawa">Pilimathalawa</option>
<option value="Pelmadulla">Pelmadulla</option>
<option value="Panadura">Panadura</option>
<option value="Piliyandala">Piliyandala</option>
<option value="Polonnaruwa">Polonnaruwa</option>
<option value="Pottuvil">Pottuvil</option>
<option value="Puttalam">Puttalam</option>
<option value="Rikillagaskada">Rikillagaskada</option>
<option value="Rathnapura">Rathnapura</option>
<option value="Trincomalee">Trincomalee</option>
<option value="Siyambalanduwa Sub">Siyambalanduwa Sub</option>
<option value="Thalawathugoda">Thalawathugoda</option>
<option value="Thambuttegama">Thambuttegama</option>
<option value="Thissamaharama">Thissamaharama</option>
<option value="Urubokka Sub">Urubokka Sub</option>
<option value="Vauniya">Vauniya</option>
<option value="Wariyapola">Wariyapola</option>
<option value="Walasmulla">Walasmulla</option>
<option value="Wellawaya">Wellawaya</option>
<option value="Welimada">Welimada</option>
<option value="Welligama Sub">Welligama Sub</option>
<option value="Wennappuwa">Wennappuwa</option>
<option value="Warakapola Sub">Warakapola Sub</option>
    </select><br>
    <label for="CarryingBy">Item Carrying By:</label>
    <select id="CarryingBy" name="CarryingBy" required>
        <option value="courier">Courier</option>
        <option value="regional_manager">Regional Manager</option>
        <option value="branch_manager">Branch Manager</option>
        <option value="other">Other</option>
      </select><br>
    
    <label for="contactPerson">Contact Person Name:</label>
    <input type="text" id="contactPerson" name="contactPerson" required><br>
    <label for="contactNumber">Contact Number:</label>
    <input type="tel" id="contactNumber" name="contactNumber" required><br>
    <label for="epf">EPF:</label>
    <input type="text" id="epf" name="epf"><br>
    <h2>Defective Item</h2>

    <table id="myTable" >
    <thead>
        <tr>
            <th>Item</th>
            <th>Serial Number</th>
            <th>Asset Code</th>
            <th>Description</th>
            <th>action</th>

        </tr>
    </thead>
    <tbody>
      <tr> 
        
        <td></td>
          </tbody>
</table>
<button type="button" onclick="addRow()">Add Item</button>


<script>
function addRow() {
    var table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);
    var cell5 = newRow.insertCell(4);
    cell1.innerHTML = '<input type="text" id="itm" name="itm[]">';
    cell2.innerHTML = '<input type="text" id="sn" name="sn[]">';
    cell3.innerHTML = '<input type="text" id="Asssetcd" name="Asssetcd[]">';
    cell4.innerHTML = '<input type="text" id="Desc_fault" name="Desc_fault[]">';
    cell5.innerHTML = '<button type="button" onclick="removeRow(this)">Remove</button>';
}

function removeRow(btn) {
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
}


</script>

   
  
   <button id="printButton" align="right">Print Form</button>

<script>
 
 document.getElementById("printButton").onclick = function () {
   
    this.style.display = 'none';
    
    window.print();
    
    
  };
</script>
<button type="submit" class="btn btn-secondary">submit</button>
</form>


</body>
</html>