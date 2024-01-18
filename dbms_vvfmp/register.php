<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            text-align: center;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"],
        select {
            width: 250px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form action="process_register.php" method="post">
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="input-group">
                <label for="contact">Contact Number:</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="input-group">
                <label for="aadhar">Aadhar Number:</label>
                <input type="text" id="aadhar" name="aadhar" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
