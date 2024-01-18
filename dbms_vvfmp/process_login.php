<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .result-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 15px;
        }

        .valid {
            color: #28a745;
        }

        .invalid {
            color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="result-container">
        <?php
        include 'db_connect.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT username, password FROM owner_details WHERE username='$username'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $stored_password = $row['password'];

                if ($password == $stored_password) {
                    echo "Login successful";
                    session_start();
                    header("Location: dashboard.php");
                } else {
                    echo "Invalid password";
                }
            } else {
                echo "Username not found";
            }
        }

        $conn->close();
        ?>


    </div>
</body>

</html>