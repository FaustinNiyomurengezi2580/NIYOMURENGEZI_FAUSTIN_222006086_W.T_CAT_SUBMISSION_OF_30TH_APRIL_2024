<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accountant Reports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: purple;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: ivory;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .reports-list {
            list-style: none;
            padding: 0;
            margin-top: 10px;
        }

        .reports-list li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .reports-list li strong {
            color: #007bff;
            display: block;
            margin-bottom: 5px;
        }

        .reports-list li p {
            margin: 0;
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
        <h1>Accountant Reports</h1>
        <ul class="reports-list" id="reports-list">
            <!-- Reports will be added dynamically here -->
        </ul>
    </div>
<a href="accountant dashboard.php" class="back-button">Back to Dashboard</a>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const reportsList = document.getElementById('reports-list');
            const reports = [
                { name: "Monthly Budget Report", description: "Analysis of income and expenses for the current month.", budget: "RWF100000", usage: "Salary, Utilities, Office Supplies" },
                { name: "Quarterly Financial Statement", description: "Summary of financial performance for the past quarter.", budget: "$2500", usage: "Rent, Insurance, Equipment Maintenance" },
                { name: "Annual Profit and Loss Report", description: "Overview of annual revenue, expenses, and net profit.", budget: "$5000", usage: "Marketing, Training, Travel Expenses" },
                { name: "Cash Flow Analysis", description: "Examination of cash inflows and outflows over a specific period.", budget: "15000", usage: "Consulting Fees, Software Licenses, Advertising" },
                { name: "Balance Sheet", description: "Statement of assets, liabilities, and equity at a specific point in time.", budget: "$2000", usage: "Legal Fees, Taxes, Professional Development" }
            ];

            reports.forEach(report => {
                const li = document.createElement('li');
                li.innerHTML = `
                    <strong>${report.name}:</strong>
                    <p>${report.description}</p>
                    <p><strong>Budget:</strong> ${report.budget}</p>
                    <p><strong>Usage:</strong> ${report.usage}</p>
                `;
                reportsList.appendChild(li);
            });
        });
    </script>

</body>
</html>
