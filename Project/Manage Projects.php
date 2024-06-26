<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: orangered;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: steelblue;
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

        .success-message {
            margin-top: 10px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border-radius: 5px;
            border: 1px solid #c3e6cb;
        }

        .remove-button {
            cursor: pointer;
            color: red;
            font-weight: bold;
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
        <h1>Manage Projects</h1>
        <form action="#" method="post" id="project-form">
            <label for="project-name">Project Name:</label>
            <input type="text" id="project-name" name="project-name" placeholder="Enter project name">
            
            <button type="button" id="add-project-button">Add Project</button> <!-- New button -->
        </form>
        <div class="success-message" id="success-message" style="display: none;">Project added successfully!</div>
        <table>
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Action</th> <!-- New column for remove button -->
                </tr>
            </thead>
            <tbody id="project-list">
                
                <tr>
                    <td>Shift Scheduling App</td>
                    <td><button class="remove-button">Remove</button></td> <!-- Remove button for each project -->
                </tr>
                <tr>
                    <td>Performance Evaluation Tool</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <tr>
                    <td>Training Program Tracker</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <tr>
                    <td>Task Management Dashboard</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <tr>
                    <td>Employee Feedback Platform</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <tr>
                    <td>Leave Management System</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <tr>
                    <td>Project Management Tool</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <tr>
                    <td>Time Tracking Application</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <tr>
                    <td>Attendance Monitoring System</td>
                    <td><button class="remove-button">Remove</button></td>
                </tr>
                <!-- Add more projects here -->
            </tbody>
        </table>
    </div>
 </div>
 <a href="admin dashboard.php" class="back-button">Back to Dashboard</a>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const projectForm = document.getElementById('project-form');
            const successMessage = document.getElementById('success-message');
            const addProjectButton = document.getElementById('add-project-button');
            const projectList = document.getElementById('project-list');

            projectForm.addEventListener('submit', function(event) {
                event.preventDefault();
                addProject();
            });

            addProjectButton.addEventListener('click', function() {
                addProject();
            });

            function addProject() {
                const projectNameInput = document.getElementById('project-name');
                const projectName = projectNameInput.value.trim();
                
                if (projectName !== '') {
                    // Create a new table row for the project
                    const newRow = document.createElement('tr');
                    const nameCell = document.createElement('td');
                    nameCell.textContent = projectName;
                    newRow.appendChild(nameCell);

                    // Create a remove button for the project
                    const removeCell = document.createElement('td');
                    const removeButton = document.createElement('button');
                    removeButton.textContent = 'Remove';
                    removeButton.className = 'remove-button';
                    removeButton.addEventListener('click', function() {
                        removeProject(newRow);
                    });
                    removeCell.appendChild(removeButton);
                    newRow.appendChild(removeCell);

                    projectList.appendChild(newRow);

                    successMessage.style.display = 'block';
                    projectNameInput.value = '';
                    setTimeout(function() {
                        successMessage.style.display = 'none';
                    }, 3000);
                }
            }

            function removeProject(row) {
                row.parentNode.removeChild(row);
            }
        });
    </script>
</body>
</html>
