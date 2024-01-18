
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Validity Result</title>
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

        $sql = "SELECT year_of_manufacture FROM vehicles WHERE vin = '$vin'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $yearOfManufacture = intval($row['year_of_manufacture']);
            $currentYear = date("Y");
            $validityPeriod = 20;
            $validityYears = $yearOfManufacture + $validityPeriod;

            if ($validityYears > $currentYear) {
                echo "Your vehicle is valid for " . ($validityYears - $currentYear) . " more years.";
            } else {
                echo "Your vehicle is not valid to drive on roads. You need to do a fitness test of your vehicle.";
            }
        } else {
            echo "Invalid VIN entered.";
        }

        $conn->close();
    }
?>
    </div>
</body>
</html>