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

// Delete worker data
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM workers WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
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
<title>Delete Workers</title>
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
        background-color: gray;
    }
    form {
        display: inline;
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

<h2>Delete Workers</h2>

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
                        <input type='submit' name='delete' value='Delete'>
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
