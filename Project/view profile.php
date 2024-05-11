<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Profil</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: darkgoldenrod;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: ivory;
    }
    h1 {
        text-align: center;
        color: #007bff;
    }
    .profile {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex; /* Added to align image and text */
    }
    .profile img {
        width: 150px; /* Adjust the width as needed */
        height: auto;
        margin-right: 20px;
        border-radius: 5px;
    }
    .profile h2 {
        color: #007bff;
        margin-top: 0;
    }
    .profile p {
        line-height: 1.6;
    }
    .profile select {
        margin-bottom: 10px;
        width: 200px; /* Adjust the width as needed */
        padding: 8px;
        border-radius: 5px;
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
    <h1>View Profile</h1>
    
    <div class="profile">
        <img src="profile.png" alt="profile">
        <div>
            <h2>Worker Profile</h2>
            <p><strong>Name:</strong> MURENGEZI FAUSTIN</p>
            <p><strong>Email:</strong> murengezi@gmail.com</p>
            <p><strong>Phone:</strong> +250784933362</p>
            <p><strong>Position:</strong> 
                <select>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Project Manager">Project Manager</option>
                    <option value="UI/UX Designer">UI/UX Designer</option>
                    <!-- Add more options as needed -->
                </select>
            </p>
            <p><strong>Department:</strong> 
                <select>
                    <option value="IT">IT</option>
                    <option value="HR">HR</option>
                    <option value="Finance">Finance</option>
                    <!-- Add more options as needed -->
                </select>
            </p>
            <p><strong>Location:</strong> 
                <select>
                    <option value="Rwanda">Rwanda</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <!-- Add more options as needed -->
                </select>
            </p>
            <p><strong>Joining Date:</strong> May 28, 2024</p>
        </div>
    </div>
</div>
<a href="admin dashboard.php" class="back-button">Back to Dashboard</a>
</body>
</html>
