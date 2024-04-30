<?php
// Database connection settings
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

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $phoneNumber = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $smsMessage = $_POST['sms'];

    // Prepare SQL statement to insert data into the database
    $sql = "INSERT INTO contacts (phone_number, email, location, sms_message) VALUES ('$phoneNumber', '$email', '$location', '$smsMessage')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact us</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color:blueviolet;
    }
    .contact-form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: paleturquoise;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"], .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .form-group textarea {
        height: 100px;
    }
    .form-group button {
        padding: 10px 20px;
        background-color: greenyellow;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-group button:hover {
        background-color: #0056b3;
    }
    .back-button {
        display: block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
        text-align: center;
    }
    .back-button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<form class="contact-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h2>Add Contact</h2>
    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="location">Location:</label>
        <textarea id="location" name="location" required></textarea>
    </div>
    <div class="form-group">
        <label for="sms">SMS Message:</label>
        <textarea id="sms" name="sms" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit">Send SMS</button>
    </div>
</form>

<a href="workers dashboard.html" class="back-button">Back To Dashboard</a>

</body>
</html>
