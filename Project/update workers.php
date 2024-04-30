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

// Update worker data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $hireDate = $_POST['hire_date'];

    $sql = "UPDATE workers SET 
            first_name = '$firstName',
            last_name = '$lastName',
            email = '$email',
            phone = '$phone',
            position = '$position',
            department = '$department',
            salary = '$salary',
            hire_date = '$hireDate'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve workers data from the database
$sql = "SELECT * FROM workers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Workers</title>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: blue;
    }
    input[type="submit"] {
        background-color: orange;
        color: white;
        border: none;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 3px;
    }
</style>
<script>
    // JavaScript code (if any) can be added here
</script>
</head>
<body>

<h2>Update Workers</h2>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Position</th>
        <th>Department</th>
        <th>Salary</th>
        <th>Hire Date</th>
        <th>Action</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['last_name']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['position']."</td>";
            echo "<td>".$row['department']."</td>";
            echo "<td>".$row['salary']."</td>";
            echo "<td>".$row['hire_date']."</td>";
            echo "<td>
                    <form action='' method='post'>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <input type='text' name='first_name' value='".$row['first_name']."'>
                        <input type='text' name='last_name' value='".$row['last_name']."'>
                        <input type='email' name='email' value='".$row['email']."'>
                        <input type='text' name='phone' value='".$row['phone']."'>
                        <input type='text' name='position' value='".$row['position']."'>
                        <input type='text' name='department' value='".$row['department']."'>
                        <input type='text' name='salary' value='".$row['salary']."'>
                        <input type='date' name='hire_date' value='".$row['hire_date']."'>
                        <input type='submit' name='update' value='Update'>
                    </form>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>

</body>
</html>

<?php
// Close database connection
$conn->close();
?>
