<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Management System</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:palevioletred;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color:limegreen;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group select {
            width: calc(100% - 22px);
        }

        .form-group textarea {
            height: 100px;
            resize: none;
        }

        .button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payroll Management</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="payroll-form">
            <div class="form-group">
                <label for="amount">Amount to be Paid:</label>
                <input type="text" id="amount" name="amount" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="date">Date to be Paid:</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="method">Method of Payment:</label>
                <select id="method" name="method">
                    <option value="cash">Cash</option>
                    <option value="check">Check</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="workers">Workers to be Paid:</label>
                <textarea id="workers" name="workers" placeholder="Enter names of workers to be paid"></textarea>
            </div>
            <button type="submit" class="button">Submit</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('payrollandsalary-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);
                const formDataJSON = {};

                for (const [key, value] of formData.entries()) {
                    formDataJSON[key] = value;
                }

                console.log(formDataJSON);
                // You can send formDataJSON to server or process it further here
            });
        });
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        // Prepare and bind the INSERT statement
        $stmt = $conn->prepare("INSERT INTO payrollandsalary (amount, date, method, recipient_type, recipient_id, description, accountant_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("dsssiis", $amount, $date, $method, $recipient_type, $recipient_id, $description, $accountant_id);

        // Set parameters
        $amount = $_POST['amount'];
        $date = $_POST['date'];
        $method = $_POST['method'];
        $recipient_type = "Worker"; // Assuming the recipient type is always a worker
        $recipient_id = 1; // This needs to be replaced with the actual worker's ID
        $description = $_POST['workers']; // Assuming the workers' names are entered in the textarea
        $accountant_id = 1; // This needs to be replaced with the actual accountant's ID

        // Execute the statement
        $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
