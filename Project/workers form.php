<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['position']) && isset($_POST['department']) && isset($_POST['salary']) && isset($_POST['hireDate'])) {
        // Connect to your database
        $servername = "localhost"; // Change this to your server name
        $username = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $dbname = "workers_management_system"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind the insert statement
        $stmt = $conn->prepare("INSERT INTO workers (first_name, last_name, email, phone, position, department, salary, hire_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssds", $firstName, $lastName, $email, $phone, $position, $department, $salary, $hireDate);

        // Set parameters and execute
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $position = $_POST['position'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];
        $hireDate = $_POST['hireDate'];
        $stmt->execute();

        // Close statement
        $stmt->close();

        // Close connection
        $conn->close();

        echo "New worker added successfully";
    } else {
        echo "All fields are required";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Worker Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: lightcoral;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        background: greenyellow;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"], input[type="email"], input[type="tel"], input[type="number"], select, textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="date"] {
        width: calc(100% - 22px);
    }

    input[type="submit"] {
        width: 100%;
        background-color:blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error {
        color: red;
    }
    .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: burlywood;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
</style>
</head>
<body>

<div class="container">
    <h2>Worker Form</h2>
    <form id="workerForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" required>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" required>

        <label for="salary">Salary:</label>
        <input type="number" id="salary" name="salary" min="0.01" step="0.01" required>

        <label for="hireDate">Hire Date:</label>
        <input type="date" id="hireDate" name="hireDate" required>

        <input type="submit" value="Submit">
    </form>
    <div id="errorMessage" class="error"></div>
</div>

</body>
</html>
