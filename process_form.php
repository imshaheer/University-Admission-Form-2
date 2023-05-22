<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $program = $_POST["program"];
    $gpa = $_POST["gpa"];
    $essay = $_POST["essay"];

    // Validate form data (you can add more validation if needed)
    if (empty($name) || empty($email) || empty($phone) || empty($program) || empty($gpa) || empty($essay)) {
        echo "Please fill in all the required fields.";
        exit;
    }

    // Process the form data further (e.g., store in a database, send an email, etc.)
    // Here's an example of displaying the form data:
    echo "<h2>Admission Form Submission Details</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Program:</strong> $program</p>";
    echo "<p><strong>GPA:</strong> $gpa</p>";
    echo "<p><strong>Personal Essay:</strong> $essay</p>";
} else {
    // If the form is not submitted, redirect the user back to the form page
    header("Location: admission_form.php");
    exit;
}
?>
