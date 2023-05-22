<!DOCTYPE html>
<html>
<head>
    <title>University Admission Form</title>
</head>
<body>
    <h2>University Admission Form</h2>
    <form method="POST" action="process_form.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" required><br><br>
        
        <label for="program">Program:</label>
        <select name="program" id="program" required>
            <option value="">Select Program</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Engineering">Engineering</option>
            <option value="Business">Business</option>
        </select><br><br>
        
        <label for="gpa">GPA:</label>
        <input type="number" name="gpa" id="gpa" step="0.01" min="0" max="4" required><br><br>
        
        <label for="essay">Personal Essay:</label>
        <textarea name="essay" id="essay" required></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
