<?php
// Check if the form is submitted
if (isset($_POST["verify_email"])) {
    // Retrieve email and verification code from the form
    $email = $_POST["email"];
    $verification_code = $_POST["verification_code"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "cjc");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query to update the email verification status
    $sql = "UPDATE members SET timestamp = NOW() WHERE email = ? AND verification_code = ?";
    
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "ss", $email, $verification_code);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Check the number of affected rows
    if (mysqli_stmt_affected_rows($stmt) == 0) {
        die("Verification code failed.");
    }

    // Close the statement and database connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Display success message
    echo "<p>Email verification successful. You can now login";
    exit();
}
?>

<form method="POST">
    <!-- Hidden input field to pass email from URL parameter -->
    <input type="hidden" name="email" value="<?php echo htmlspecialchars($_GET['email']); ?>" required>
    <!-- Input field for verification code -->
    <input type="text" name="verification_code" placeholder="Enter verification code" required>
    <!-- Submit button -->
    <input type="submit" name="verify_email" value="Verify Email">
</form>
