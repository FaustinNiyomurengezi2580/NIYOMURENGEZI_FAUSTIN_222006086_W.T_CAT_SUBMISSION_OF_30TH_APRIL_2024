<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Notifications</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color:green;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    h1 {
        text-align: center;
        color: #007bff;
    }
    .notification {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 15px;
    }
    .notification h2 {
        color: #007bff;
        margin-top: 0;
    }
    .notification p {
        line-height: 1.6;
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
    <h1>Notifications</h1>
    
    <div class="notification" id="notification-container">
        <!-- Notifications will be dynamically added here -->
    </div>

    <a href="workers dashboard.php" class="back-button">Back To Dashboard</a>
</div>

<script>
    // Simulated notifications data (replace this with actual data from your backend)
    var notificationsData = [
        { title: "New Task Assigned", message: "You have been assigned a new task. Please review and complete it by the deadline." },
        { title: "Training Reminder", message: "Don't forget to complete the mandatory training module by the end of the week." },
        { title: "Upcoming Meeting", message: "Reminder: There is a team meeting scheduled for tomorrow at 10:00 AM. Make sure to attend." }
    ];

    // Function to display notifications
    function displayNotifications() {
        var notificationContainer = document.getElementById("notification-container");

        // Clear previous notifications
        notificationContainer.innerHTML = "";

        // Loop through notifications data and create HTML elements for each notification
        notificationsData.forEach(function(notification) {
            var notificationElement = document.createElement("div");
            notificationElement.classList.add("notification");
            notificationElement.innerHTML = `
                <h2>${notification.title}</h2>
                <p>${notification.message}</p>
            `;
            notificationContainer.appendChild(notificationElement);
        });
    }

    // Call the function to display notifications when the page loads
    window.onload = displayNotifications;
</script>

</body>
</html>
