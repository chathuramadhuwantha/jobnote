<?php


// Retrieve form data
$date = $_POST['date'];
$branch = $_POST['branch'];
$itm = $_POST['itm'];
$sn = $_POST['sn'];
$Asssetcd = $_POST['Asssetcd'];
$CarryingBy = $_POST['CarryingBy'];
$epf = $_POST['epf'];
$Desc_fault = $_POST['Desc_fault'];
$contactPerson = $_POST['contactPerson'];
$contactNumber = $_POST['contactNumber'];

// Create a new PDF instance
$pdf = new TCPDF('p', 'PDF_UNIT_MM', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator();
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Job Note');
$pdf->SetSubject('Job Note Export');
$pdf->SetKeywords('Job Note, PDF, Export');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Write content to PDF
$html = "
<h1>Job Note</h1>
<p>Date: $date</p>
<p>Branch: $branch</p>
<p>Item: $itm</p>
<p>Serial Number: $sn</p>
<p>Asset Code: $Asssetcd</p>
<p>Carrying By: $CarryingBy</p>
<p>EPF: $epf</p>
<p>Description of Fault: $Desc_fault</p>
<p>Contact Person: $contactPerson</p>
<p>Contact Number: $contactNumber</p>
";

$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF
$pdf->Output('jobnote.pdf', 'D');

?>
