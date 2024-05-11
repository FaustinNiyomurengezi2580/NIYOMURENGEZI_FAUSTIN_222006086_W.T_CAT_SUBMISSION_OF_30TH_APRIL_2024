<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('call.jpg'); /* Set your image path here */
            background-size: cover; /* Adjusted background size */
            background-position: center;
            display: flex;
            flex-direction: column;

        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            background-color: yellow;
        }

        h1 {
            color: blue;
        }

        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .button {
            display: inline-block;
            padding: 20px 40px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .button:hover {
            background-color: orange;
        }

        .footer {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            margin-top: auto; /* Push footer to the bottom */
        }

        .header img {
            width: 150px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="image acc.jpg" alt="image acc"> 
    </div>
    <div class="container">
        <h1>Welcome To Accountant Dashboard</h1>
        <div class="button-container">
            <a href="index.php" class="button">Home</a>
            <a href="workers list.php" class="button">Workers List</a>
            <a href="payroll and salary.php" class="button">Payroll and Salary</a>
            <a href="index.php" class="button">Logout</a>
            <a href="Reports.php" class="button">Reports</a>
        </div>
        <div class="dashboard">
            <div class="dashboard-content">
                <h1>Dashboard Content Goes Here</h1>
                <p>This is where you can display various information and functionality for the accountant.</p>
            </div>
        </div>
    </div>
</body>
</html>
