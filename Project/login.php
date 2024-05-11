<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Basic styles for layout */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .header {
            background-color: white;
            color: orange;
            padding: 10px 20px;
            text-align: center;
            width: 100%;
            display: flex;
            justify-content: center; /* Center align the content */
            align-items: center;
            position: relative; /* Add position relative */
        }
        .button-container {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .button-container a {
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 10px;
            text-decoration: none; /* Remove default link underline */
        }
        .button-container a:hover {
            background-color: #0056b3;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: gray;
            color: #fff;
            padding: 20px;
            text-align: center;
            width: 100%; /* Set the width to 100% */
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        /* Login form styles */
        .login-container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: blue;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"],
        input[type="password"],
        button,
        select {
            width: calc(100% - 22px); /* Adjusted width to account for padding and border */
            margin: 5px 0; /* Adjusted margin */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            width: 100%;
            background-color: violet;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
        }
        /* Dashboard styles */
        .dashboard {
            display: none;
        }
        .dashboard.active {
            display: block;
        }
        /* Logo image styles */
        .logo {
            width: 150px; /* Adjust the size as needed */
            position: absolute;
            top: 10px; /* Adjust the distance from the top */
            left: 10px; /* Adjust the distance from the left side */
        }
        /* Image1 styles */
        .dashboard-content-manager img {
            width: 100%; /* Make the image cover the entire width */
            height: auto; /* Maintain aspect ratio */
        }
        /* Center align the header text */
        .header h1 {
            margin: 0;
        }
        /* Accountant Dashboard header adjustments */
        #accountantDashboard .header h1 {
            margin: 0 auto; /* Center align the heading */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <select id="userType" required>
                <option value="" disabled selected>Select User Type</option>
                <option value="worker">Worker</option>
                <option value="manager">Manager</option>
                <option value="accountant">Accountant</option> <!-- Added "Accountant" option -->
            </select>
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div id="errorMessage" class="error"></div>
    </div>

    <!-- Worker Dashboard -->
    <div id="workerDashboard" class="container dashboard">
        <header class="header">
            <h1> Welcome To Worker Dashboard</h1>
        </header>
        
        <div class="button-container">
            <a href="index.php">Home</a>
            <a href="services.php">services</a>
            <a href="about us.php">About Us</a>
            <a href="contact.php">Contact Us</a>
            <a href="tasks.php">Tasks</a>
            <a href="notifications.php">Notifications</a>
        </div>
        <footer>
            <div>
                <h2>About Us</h2>
                <p>
                    My wms is designed to develop an intuitive and efficient worker management system that empowers organizations to streamline their workforce operations, enhance productivity, and promote employee satisfaction. 
                </p>
            </div>
            <div>
                <h2>Contact Us</h2>
                <div class="contact-info">
                    <div class="contact-item">
                        <p>RN1 HUYE, RWANDA</p>
                    </div>
                    <div class="contact-item">
                        <p>nifawms@gmail.com</p>
                    </div>
                    <div class="contact-item">
                        <p>+250 784933362</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Manager Dashboard -->
    <div id="managerDashboard" class="container dashboard">
        <div class="header">
            <img src="images logo.jpg" alt="images logo" class="logo"> <!-- Placeholder for logo image -->
            <h1>Welcome To Manager Dashboard</h1> <!-- Center-aligned header -->
        </div>
        <div class="button-container">
            <a href="View Employeee.php">View Employeee</a>
            <a href="Manage Projects.php">Manage Projects</a>
            <a href="Generate Reports.php">Generate Reports</a>
            <a href="Settings.php">Settings</a>
            <a href="index.php">Logout</a>
        </div>
        <div class="dashboard-manager">
            <div class="dashboard-content-manager">
                <h1>Dashboard Content Goes Here</h1>
                <p>This is where you can display various information and functionality for the manager or admin.</p>
                <img src="image1.jpg" alt="image1"> <!-- Placeholder for image -->
            </div>
        </div>
    </div>

    <!-- Accountant Dashboard -->
    <div id="accountantDashboard" class="container dashboard"> <!-- Added accountant dashboard -->
        <header class="header">
            <img src="image acc.jpg" alt="image acc"> <!-- Image acc for Accountant Dashboard -->
            <h1>Welcome To Accountant Dashboard</h1>
        </header>
        <div class="button-container">
            <a href="index.php">Home</a>
            <a href="workers list.php">Workers List</a>
            <a href="payroll and salary.php">Payroll and Salary</a>
            <a href="Reports.php">Reports</a>
            <a href="index.php">Logout</a>
        </div>

        <footer>
            <div class="dashboard">
                <div class="dashboard-content">
                    <h2>Dashboard Content Goes Here</h2>
                    <p>This is where you can display various information and functionality for the accountant.</p>
                
                <img src="call.jpg" alt="call"> <!-- Placeholder for image -->
            </div>
      
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            var userType = document.getElementById('userType').value;
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Perform basic form validation
            if (!userType || !username || !password) {
                document.getElementById('errorMessage').innerText = "All fields are required";
                return;
            }

            // Hide all dashboards
            var dashboards = document.querySelectorAll('.dashboard');
            dashboards.forEach(function(dashboard) {
                dashboard.classList.remove('active');
            });

            // Show the selected dashboard based on user type
            var selectedDashboard = document.getElementById(userType + 'Dashboard');
            if (selectedDashboard) {
                selectedDashboard.classList.add('active');
                document.querySelector('.login-container').style.display = 'none'; // Hide login form
            } else {
                document.getElementById('errorMessage').innerText = "Invalid user type";
            }
        });
    </script>
</body>
</html>
