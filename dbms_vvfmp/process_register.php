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
            $name = $_POST['name'];
            $username = $_POST['username'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $contact = $_POST['contact'];
            $aadhar = $_POST['aadhar'];
            $password = $_POST['password'];

            $sql = "INSERT INTO owner_details (name, username, date_of_birth, gender, contact, aadhar_no, password) VALUES ('$name', '$username', '$dob', '$gender', '$contact', '$aadhar', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "Registration successful";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        $conn->close();
        ?>


    </div>
</body>

</html>