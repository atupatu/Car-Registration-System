<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Update Result</title>
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
            $vin = $_POST['vin'];
            $color = $_POST['vehicleColor'];
            $price = $_POST['vehiclePrice'];

            $check_vin_query = "SELECT * FROM vehicles WHERE vin = '$vin'";
            $result = $conn->query($check_vin_query);

            if ($result->num_rows > 0) {
                $update_query = "UPDATE vehicles SET color='$color', price='$price' WHERE vin='$vin'";

                if ($conn->query($update_query) === TRUE) {
                    echo "Vehicle information updated successfully";
                } else {
                    echo "Error updating vehicle information: " . $conn->error;
                }
            } else {
                echo "VIN does not exist in the database";
            }

            $conn->close();
        }
        ?>
    </div>
</body>

</html>