<!DOCTYPE html>
<html>
<head>
    <title>Signup Page</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="teachersignup1.php" method="post">
        <label for="facultycode">Faculty Code:</label>
        <input type="text" id="facultycode" name="facultycode" required><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required><br><br>

        <label for="password">Password:</label>
        <input type="pwd" id="pwd" name="pwd" required><br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
