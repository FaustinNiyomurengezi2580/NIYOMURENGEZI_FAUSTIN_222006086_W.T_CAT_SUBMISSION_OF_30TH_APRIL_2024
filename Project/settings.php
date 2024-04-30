<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: mediumblue;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: darkorange;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .back-button {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        

        <!-- Workers Management Settings Form -->
        <div class="settings">
            <h2>Settings</h2>

            <!-- Workers Management Settings Form -->
            <form id="workers-management-settings-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="department">Department:</label>
                    <select id="department" name="department">
                        <option value="hr">Human Resources</option>
                        <option value="it">Information Technology</option>
                        <option value="finance">Finance</option>
                        <!-- Add more department options as needed -->
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="shift">Shift:</label>
                    <select id="shift" name="shift">
                        <option value="day">Day</option>
                        <option value="night">Night</option>
                        <!-- Add more shift options if needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="employment-type">Employment Type:</label>
                    <select id="employment-type" name="employment_type">
                        <option value="full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                        <!-- Add more employment type options if needed -->
                    </select>
                </div>
                <!-- Add more settings options here -->
               
                <button type="submit" class="button">Save Settings</button>
            </form>
        </div>

        <!-- Other Forms -->
        <!-- Add more forms here -->

    </div>
 <a href="admin dashboard.html" class="back-button">Back to Dashboard</a>
</body>
</html>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $department = $_POST['department'];
    $shift = $_POST['shift'];
    $employment_type = $_POST['employment_type'];

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workers_management_system";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into the worker_settings table
    $sql = "INSERT INTO worker_settings (department, shift, employment_type) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $department, $shift, $employment_type);

    // Execute the prepared statement
    if ($stmt->execute() === TRUE) {
        echo "Settings saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();
}
?>
