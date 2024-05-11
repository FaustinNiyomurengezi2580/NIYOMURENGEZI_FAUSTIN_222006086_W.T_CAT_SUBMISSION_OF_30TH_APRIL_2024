<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: brown;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: burlywood;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group select {
            width: calc(100% - 22px);
        }

        .form-group textarea {
            height: 100px;
            resize: none;
        }

        .workers-list {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        .workers-list li {
            margin-bottom: 5px;
        }

        .button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
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
        <h1>Payroll Management</h1>
        <form action="#" method="post" id="payroll-form">
            <div class="form-group">
                <label for="amount">Amount to be Paid:</label>
                <input type="text" id="amount" name="amount" placeholder="Enter amount">
            </div>
            <div class="form-group">
                <label for="date">Date to be Paid:</label>
                <input type="date" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="method">Method of Payment:</label>
                <select id="method" name="method">
                    <option value="cash">Cash</option>
                    <option value="check">Check</option>
                    <option value="bank_transfer">Bank Transfer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="workers">Workers to be Paid:</label>
                <textarea id="workers" name="workers" placeholder="Enter names of workers to be paid"></textarea>
                <ul class="workers-list" id="workers-list"></ul>
            </div>
            <button type="submit" class="button">Submit</button>
        </form>
    </div>
     <a href="accountant dashboard.php" class="back-button">Back to Dashboard</a>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('payroll-form');
            const workersTextarea = document.getElementById('workers');
            const workersList = document.getElementById('workers-list');

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);
                const formDataJSON = {};

                for (const [key, value] of formData.entries()) {
                    formDataJSON[key] = value;
                }

                console.log(formDataJSON);
                // You can send formDataJSON to server or process it further here
            });

            workersTextarea.addEventListener('input', function() {
                const workers = this.value.split('\n');
                workersList.innerHTML = '';
                workers.forEach(worker => {
                    if (worker.trim() !== '') {
                        const li = document.createElement('li');
                        li.textContent = worker.trim();
                        workersList.appendChild(li);
                    }
                });
            });
        });
    </script>
</body>
</html>
