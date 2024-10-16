// Function to handle PDF export
function exportToPDF() {
    // Create a new jsPDF instance
    var doc = new jsPDF();
  
    // Get the content to export
    var content = document.getElementById('content');
  
    // Add content to the PDF
    doc.html(content, {
      callback: function (doc) {
        // Save the PDF
        doc.save('exported.pdf');
      }
    });
  }
  
  // Event listener for the PDF export button
  document.getElementById('pdfButton').addEventListener('click', exportToPDF);
  