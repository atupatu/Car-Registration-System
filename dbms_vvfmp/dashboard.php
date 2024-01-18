<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBMS VVFMP - Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .tabs {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .tab {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 16px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .tab:hover {
            background-color: #007bff;
            color: #fff;
        }

        .content {
            padding: 20px;
            text-align: center;
        }

        .update-button {
            padding: 12px 24px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .update-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Voluntary Vehicle Fleet Modernization Program</h1>
    </div>
    <div class="tabs">
        <a href="register_vehicle.php" class="tab">Register Your Vehicle</a>
        <a href="schedule_fitness.php" class="tab">Get Car Fitness Appointment Date</a>
    </div>
    <div class="content">
        <a href="update_vehicle_info.php" class="update-button">Update Vehicle Information</a>
        <a href="check_validity.php" class="update-button">Check Validity Period of Vehicle</a>
    </div>
    </div>
</body>
</html>
