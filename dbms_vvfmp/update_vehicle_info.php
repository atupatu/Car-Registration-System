<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Update Vehicle Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        .container {
            width: 400px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 8px;
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
    <div class="container">
        <h1>Update Vehicle Information</h1>
        <form action="process_vehicle_update.php" method="post">
            <div class="form-group">
                <label for="vin">Vehicle Identification Number (VIN):</label>
                <input type="text" id="vin" name="vin" required>
            </div>
            <div class="form-group">
                <label for="vehicleColor">Update Vehicle Color:</label>
                <input type="text" id="vehicleColor" name="vehicleColor" required>
            </div>
            <div class="form-group">
                <label for="vehiclePrice">Update Vehicle Price:</label>
                <input type="text" id="vehiclePrice" name="vehiclePrice" required>
            </div>
            <input type="submit" value="Update">
        </form>
    </div>
</body>
</html>
