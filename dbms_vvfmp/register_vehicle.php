<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Update Vehicle Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: calc(100% - 18px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="process_vehicle_registration.php" method="post">
        <h1>Register Your Vehicle</h1>
        <label for="vin">Vehicle Identification Number (VIN):</label>
        <input type="text" id="vin" name="vin" required><br><br>

        <label for="year">Year of Manufacture:</label>
        <input type="text" id="year" name="year" required><br><br>

        <label for="price">Price of Car:</label>
        <input type="text" id="price" name="price" required><br><br>

        <label for="color">Color of Car:</label>
        <input type="text" id="color" name="color" required><br><br>

        <label for="license_plate">License Plate:</label>
        <input type="text" id="license_plate" name="license_plate" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
