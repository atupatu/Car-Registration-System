<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Vehicle Registration</title>
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

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vvfmp";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $vin = $_POST['vin'];
        $appointment_date = $_POST['appointment_date'];

        $sql = "INSERT INTO car_fitness_appointments (vin, appointment_date) VALUES ('$vin', '$appointment_date')";

        if ($conn->query($sql) === TRUE) {
            echo "Appointment scheduled successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
    </div>
</body>

</html>