<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact us</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0; /* Added to remove default margins */
        padding: 0; /* Added to remove default padding */
        background-color: #f2f2f2; /* Changed background color */
    }
    .contact-form {
        max-width: 400px;
        margin: 50px auto; /* Adjusted margin for center alignment */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: orange;
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
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        background-color: chocolate;
    }
    .form-group button:hover {
        background-color: blue;
    }
    .back-button {
        position: fixed; /* Position fixed for fixed position */
        bottom: 20px; /* Adjusted bottom margin */
        left: 20px; /* Adjusted left margin */
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .back-button:hover {
        background-color: blue;
    }
    .container {
            max-width: 800px;
            margin: 50px yellow
            padding: 20px;
            background-color:yellow;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
</style>
</head>
<body>

<div class="contact-form">
    <h2>Add Contact</h2>
    <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
    </div>
    <div class="form-group">
        <label for="location">Location:</label>
        <textarea id="location" name="location"></textarea>
    </div>
    <div class="form-group">
        <label for="sms">SMS Message:</label>
        <textarea id="sms" name="sms"></textarea>
    </div>
    <div class="form-group">
        <button onclick="sendSMS()">Send SMS</button>
    </div>
</div>

<a href="workers dashboard.php" class="back-button">Back To Dashboard</a>

<script>
    function sendSMS() {
        var phoneNumber = document.getElementById("phone").value;
        var email = document.getElementById("email").value;
        var location = document.getElementById("location").value;
        var smsMessage = document.getElementById("sms").value;

        // Here you can implement the logic to send SMS using an API or any backend service
        
        // For demonstration, let's just log the details to console
        console.log("Phone Number:", phoneNumber);
        console.log("Email:", email);
        console.log("Location:", location);
        console.log("SMS Message:", smsMessage);
        
        // Clear the form fields after sending SMS
        document.getElementById("phone").value = "";
        document.getElementById("email").value = "";
        document.getElementById("location").value = "";
        document.getElementById("sms").value = "";
        
        // Optionally, you can show a success message to the user
        alert("SMS sent successfully!");
    }
</script>

</body>
</html>
