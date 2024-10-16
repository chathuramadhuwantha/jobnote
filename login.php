

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define your admin credentials (you can replace these with your actual admin credentials)
    $adminUsername = "admin";
    $adminPassword = "admin123";
    $USerUsername = "user";
    $UserPassword = "user";

    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if username and password match the admin credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Start a session and set a session variable to indicate that the user is logged in
        session_start();
        $_SESSION["admin"] = true;

        // Redirect the user to the page where they can access the form
        header("Location: view_data.php");
    }
        elseif ($username === $USerUsername && $password === $UserPassword) {
            // Start a session and set a session variable to indicate that the user is logged in
            session_start();
            $_SESSION["user"] = true;
    
            // Redirect the user to the page where they can access the form
            header("Location: jobnotedocument.php");

        }
     else {
        // If username or password is incorrect, display an error message
        echo "Invalid username or password. Please try again.";
    }
}
?>
