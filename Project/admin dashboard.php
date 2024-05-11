<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manager Dashboard</title>
  <style>
    /* Basic styles for layout */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: greenyellow;
    }
    .header {
      background-color: #333;
      color: orange;
      padding: 20px;
      text-align: center;
      position: relative; /* Added position relative */
    }
    .header img {
      width: 100px; /* Adjust the width as needed */
      position: absolute;
      top: 10px;
      left: 10px;
    }
    .container {
      padding: 20px;
      text-align: center;
      background-color: pink;
    }
    .button-container {
      margin-top: 20px;
    }
    .button-container a {
      padding: 10px 20px;
      border-radius: 20px;
      background-color: chocolate;
      color: #fff;
      text-decoration: none;
      margin: 0 10px;
    }
    .button-container a:hover {
      background-color: #0056b3;
    }
    .dashboard {
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 100px);
    }
    .dashboard-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: center; /* Center the content */
    }
    .dashboard h1 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="manager logo.jpg" alt="manager logo"> <!-- Adjust the image path and attributes as needed -->
    <h1>Welcome To The Manager Dashboard</h1>
  </div>
  <div class="container">
    <div class="button-container">
      <a href="View Employees.php">View Employees</a>
      <a href="Manage Projects.php">Manage Projects</a>
      <a href="Generate Reports.php">Generate Reports</a>
      <a href="Settings.php">Settings</a>
      <a href="index.php">Logout</a>
    </div>
  </div>
  <div class="dashboard">
    <div class="dashboard-content">
      <h1>Dashboard Content Goes Here</h1>
      <p>This is where you can display various information and functionality for the manager or admin.</p>
      <img src="image1.jpg" alt="Image 1"> <!-- Adjust the image path and attributes as needed -->
    </div>
  </div>
</body>
</html>
