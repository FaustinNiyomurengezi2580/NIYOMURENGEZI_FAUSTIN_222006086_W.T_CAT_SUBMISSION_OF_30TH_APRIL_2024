<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accountant Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: cadetblue;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background: lightpink;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"], input[type="password"], input[type="email"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: orange;
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

    .success {
        color: green;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

</style>
</head>
<body>

<div class="container">
    <h2>Accountant Register</h2>
    <form id="accountantForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Submit">
    </form>
    <div id="responseMessage" class="error">
        <?php
        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "workers_management_system";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch data from the form
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role = 'Finance'; // Change this to the appropriate role, if needed

            // Prepare and bind SQL statement to check if the username already exists
            $stmt_check_username = $conn->prepare("SELECT * FROM accountant WHERE username = ?");
            $stmt_check_username->bind_param("s", $username);
            $stmt_check_username->execute();
            $result_check_username = $stmt_check_username->get_result();

            // Check if the username already exists
            if ($result_check_username->num_rows > 0) {
                echo "Username already exists";
            } else {
                // Prepare and bind SQL statement to insert a new record
                $stmt_insert = $conn->prepare("INSERT INTO accountant (username, password, name, email, role) VALUES (?, ?, ?, ?, ?)");
                $stmt_insert->bind_param("sssss", $username, $password, $name, $email, $role);

                // Execute the SQL statement to insert the record
                if ($stmt_insert->execute() === TRUE) {
                    echo "New record created successfully";
                    // Redirect to the login page
                    header("Location: login.html");
                    exit();
                } else {
                    echo "Error: " . $stmt_insert->error;
                }

                // Close the insert statement
                $stmt_insert->close();
            }

            // Close the check username statement
            $stmt_check_username->close();

            // Close connection
            $conn->close();
        }
        ?>
    </div>

    <h2>Accountant Management</h2>

    <!-- Accountant Data Table -->
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "workers_management_system";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Handle delete action
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            $sql_delete = "DELETE FROM accountant WHERE accountant_id = $id";
            if ($conn->query($sql_delete) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }

        // Handle update action
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $new_username = $_POST['new_username'];
            $new_password = $_POST['new_password'];
            $new_name = $_POST['new_name'];
            $new_email = $_POST['new_email'];

            // Prepare and bind SQL statement to check if the new username already exists
            $stmt_check_username = $conn->prepare("SELECT * FROM accountant WHERE username = ?");
            $stmt_check_username->bind_param("s", $new_username);
            $stmt_check_username->execute();
            $result_check_username = $stmt_check_username->get_result();

            // Check if the new username already exists
            if ($result_check_username->num_rows > 0) {
                echo "New username already exists";
            } else {
                // Prepare and bind SQL statement to update the record
                $stmt_update = $conn->prepare("UPDATE accountant SET username=?, password=?, name=?, email=? WHERE accountant_id=?");
                $stmt_update->bind_param("ssssi", $new_username, $new_password, $new_name, $new_email, $id);

                // Execute the SQL statement to update the record
                if ($stmt_update->execute() === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $stmt_update->error;
                }

                // Close the update statement
                $stmt_update->close();
            }

            // Close the check username statement
            $stmt_check_username->close();
        }

        // Retrieve accountant data from the database
        $sql_select = "SELECT * FROM accountant";
        $result = $conn->query($sql_select);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['accountant_id']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['role']."</td>";
                echo "<td>
                        <form action='' method='post'>
                            <input type='hidden' name='id' value='".$row['accountant_id']."'>
                            <input type='text' name='new_username' placeholder='New Username'>
                            <input type='text' name='new_password' placeholder='New Password'>
                            <input type='text' name='new_name' placeholder='New Name'>
                            <input type='email' name='new_email' placeholder='New Email'>
                            <input type='submit' name='update' value='Update'>
                            <input type='submit' name='delete' value='Delete'>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>0 results</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>
</div>

</body>
</html>
