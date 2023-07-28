<!DOCTYPE html>
<html>
<head>
    <title>User Signup</title>
    <link rel="stylesheet" type="text/css" href= "style1.css">
</head>
<body>
    <div class="container">
        <h2>User Signup</h2>
        <form action="register.php" method="POST">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="useremail">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="usertype">User Type:</label>
            <select id="usertype" name="usertype">
                <option value="doctor">Doctor</option>
                <option value="patient">Patient</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="admin">Admin</option>
            </select><br><br>

            <input type="submit" value="Signup">
        </form>
    </div>
</body>
</html>
