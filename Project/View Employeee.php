<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: yellowgreen;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: lightpink;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .edit-btn, .delete-btn {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .edit-btn {
            background-color: #2196F3;
            color: white;
            margin-right: 5px;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
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
        <h1>View Employees</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Manzi Thierry</td>
                    <td>Finance</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Niyo Faustin</td>
                    <td>Marketing</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>ToutJour Izzy BOY</td>
                    <td>Human Resources</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Faustiiz Brown</td>
                    <td>Information Technology</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Kagabo David</td>
                    <td>Operations</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Sarah Kabano</td>
                    <td>Customer Service</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Kwizera Martinez</td>
                    <td>Sales</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>MURENGEZI Taylor</td>
                    <td>Research and Development</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>William KING RUGEMANA</td>
                    <td>Legal</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Olivia IRASUBIZA</td>
                    <td>Quality Assurance</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Christopher MUNEZA</td>
                    <td>Production</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows for other employees here -->
                <tr>
                    <td>John Kabagema</td>
                    <td>Engineering</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Jeanne Irasubiza</td>
                    <td>Customer Support</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Hirwa Johnson</td>
                    <td>Research</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Jackson Semashyimbo</td>
                    <td>Human Resources</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>David Kega</td>
                    <td>Finance</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Emile Kagabo</td>
                    <td>Marketing</td>
                    <td>
                        <button class="edit-btn" onclick="editRow(this)">Edit</button>
                        <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
 <a href="admin dashboard.php" class="back-button">Back to Dashboard</a>
    <script>
        // JavaScript function to log a message when the page is loaded
        window.onload = function() {
            console.log('Page loaded');
        };

        // Function to edit row
        function editRow(button) {
            var row = button.closest('tr');
            var name = row.cells[0].innerText;
            var department = row.cells[1].innerText;

            var newName = prompt('Enter new name:', name);
            var newDepartment = prompt('Enter new department:', department);

            if (newName !== null && newDepartment !== null) {
                row.cells[0].innerText = newName;
                row.cells[1].innerText = newDepartment;
            }
        }

        // Function to delete row
        function deleteRow(button) {
            var row = button.closest('tr');
            row.remove();
        }
    </script>
</body>
</html>
