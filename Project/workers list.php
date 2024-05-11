<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Workers List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: tomato;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
            background-color: rosybrown;
        }

        h1 {
            color: #333;
        }

        /* Styles for the workers list */
        .workers-list {
            margin-top: 50px;
            text-align: left;
        }

        .worker-item {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .worker-item:hover {
            transform: translateY(-5px);
        }

        .worker-item h3 {
            margin-top: 0;
            color: #333;
            font-size: 24px;
        }

        .worker-item p {
            margin: 5px 0;
            color: #666;
            font-size: 16px;
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
        <h1>Workers List</h1>
        <div class="workers-list" id="workersList">
            <!-- Worker items will be dynamically added here -->
        </div>
    </div>
    <a href="accountant dashboard.php" class="back-button">Back to Dashboard</a>

    <script>
        // Sample worker data
        const workers = [
            { name: " NIYOMURENGEZI FAUSTIN", id: "001", position: "Manager", salary: "RWF500000" },
            { name: "RUGEMANA CHRISTIAN", id: "002", position: "Developer", salary: "$4000" },
            { name: "ASANTE PASCAL", id: "003", position: "Accountant", salary: "$4500" },
            { name: "ANGE BAGWIRE", id: "004", position: "Sales Associate", salary: "$3800" },
            // Add more worker data here
        ];

        // Function to populate the worker list
        function populateWorkersList() {
            const workersListContainer = document.getElementById("workersList");

            workers.forEach(worker => {
                const workerItem = document.createElement("div");
                workerItem.classList.add("worker-item");

                const workerName = document.createElement("h3");
                workerName.textContent = worker.name;

                const workerId = document.createElement("p");
                workerId.textContent = "ID: " + worker.id;

                const workerPosition = document.createElement("p");
                workerPosition.textContent = "Position: " + worker.position;

                const workerSalary = document.createElement("p");
                workerSalary.textContent = "Salary: " + worker.salary;

                workerItem.appendChild(workerName);
                workerItem.appendChild(workerId);
                workerItem.appendChild(workerPosition);
                workerItem.appendChild(workerSalary);

                workersListContainer.appendChild(workerItem);
            });
        }

        // Call the function to populate the worker list
        populateWorkersList();
    </script>
</body>
</html>
