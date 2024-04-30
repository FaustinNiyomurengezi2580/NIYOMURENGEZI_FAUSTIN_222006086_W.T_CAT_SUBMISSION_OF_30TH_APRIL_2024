<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View Profile - Workers Management System</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: orange;
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
        margin: 5px 0;
    }
    .profile input[type="text"] {
        margin-bottom: 10px;
        width: 100%; /* Adjust the width as needed */
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .profile select {
        margin-bottom: 10px;
        width: 100%; /* Adjust the width as needed */
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .profile button {
        padding: 8px 16px;
        margin-right: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .profile button.update {
        background-color: #007bff;
        color: #fff;
    }
    .profile button.delete {
        background-color: #dc3545;
        color: #fff;
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
            <form id="edit-profile-form" method="post" action="">
                <input type="hidden" name="id" value="1">
                <p><strong>Name:</strong> <input type="text" name="name" value="MURENGEZI FAUSTIN"></p>
                <p><strong>Email:</strong> <input type="text" name="email" value="murengezi@gmail.com"></p>
                <p><strong>Phone:</strong> <input type="text" name="phone" value="+250784933362"></p>
                <p><strong>Position:</strong> 
                    <select name="position">
                        <option value="Software Developer">Software Developer</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="UI/UX Designer">UI/UX Designer</option>
                    </select>
                </p>
                <p><strong>Department:</strong> 
                    <select name="department">
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Finance">Finance</option>
                    </select>
                </p>
                <p><strong>Location:</strong> 
                    <select name="location">
                        <option value="Rwanda">Rwanda</option>
                        <option value="USA">USA</option>
                        <option value="UK">UK</option>
                    </select>
                </p>
                <p><strong>Joining Date:</strong> <input type="text" value="May 28, 2024" disabled></p>
                <button type="submit" name="update" class="update">Update</button>
                <button type="submit" name="delete" class="delete">Delete</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Function to handle profile update
    function handleUpdate() {
        // Assume update was successful
        alert("Profile update successful");
    }

    // Function to handle profile deletion
    function handleDelete() {
        // Assume deletion was successful
        alert("Profile deletion successful");
    }

    // Add event listeners to update and delete buttons
    document.querySelector('.update').addEventListener('click', handleUpdate);
    document.querySelector('.delete').addEventListener('click', handleDelete);
</script>
<a href="admin dashboard.html" class="back-button">Back to Dashboard</a>
</body>
</html>

<?php
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

// Check if the update button is clicked
if (isset($_POST['update'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $location = $_POST['location'];

    // Prepare SQL statement to update data in the editprofile table
    $sql = "UPDATE editprofile SET name=?, email=?, phone=?, position=?, department=?, location=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $name, $email, $phone, $position, $department, $location, $id);

    // Execute the prepared statement
    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Profile updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating profile: " . $conn->error . "');</script>";
    }
}

// Check if the delete button is clicked
if (isset($_POST['delete'])) {
    // Retrieve form data
    $id = $_POST['id'];

    // Prepare SQL statement to delete data from the editprofile table
    $sql = "DELETE FROM editprofile WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Execute the prepared statement
    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Profile deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting profile: " . $conn->error . "');</script>";
    }
}

// Close the database connection
$conn->close();
?>
