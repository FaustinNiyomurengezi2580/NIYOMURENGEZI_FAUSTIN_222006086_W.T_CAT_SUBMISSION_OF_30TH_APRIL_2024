<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Reports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: skyblue;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: pink;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .department {
            margin-bottom: 20px;
        }

        .department h2 {
            margin-bottom: 5px;
            font-weight: bold;
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
            text-align: center;
            font-size: 16px;
            margin-top: 10px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .report-status {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f0f0f0;
        }

        .report-status.success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }

        .report-status.error {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group select,
        .form-group input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
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
        <h1>Generate Reports</h1>

        <div class="department">
            <h2>Finance</h2>
            <div class="form-group">
                <label for="finance-report">Select Report:</label>
                <select id="finance-report">
                    <option value="financial-statement">Financial Statement</option>
                    <option value="budget-report">Budget Report</option>
                    <option value="expense-report">Expense Report</option>
                    <option value="income-statement">Income Statement</option>
                </select>
            </div>
            <div class="form-group">
                <label for="finance-rate">Rate:</label>
                <input type="number" id="finance-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('finance')">Generate Reports</button>
            <div id="finance-status" class="report-status" style="display: none;"></div>
        </div>

        <div class="department">
            <h2>Marketing</h2>
            <div class="form-group">
                <label for="marketing-report">Select Report:</label>
                <select id="marketing-report">
                    <option value="marketing-strategy">Marketing Strategy</option>
                    <option value="campaign-performance">Campaign Performance</option>
                    <option value="market-research">Market Research</option>
                    <option value="customer-segmentation">Customer Segmentation</option>
                </select>
            </div>
            <div class="form-group">
                <label for="marketing-rate">Rate:</label>
                <input type="number" id="marketing-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('marketing')">Generate Reports</button>
            <div id="marketing-status" class="report-status" style="display: none;"></div>
        </div>

        <div class="department">
            <h2>Human Resources</h2>
            <div class="form-group">
                <label for="hr-report">Select Report:</label>
                <select id="hr-report">
                    <option value="employee-performance">Employee Performance</option>
                    <option value="training-needs-analysis">Training Needs Analysis</option>
                    <option value="attendance-report">Attendance Report</option>
                    <option value="workforce-planning">Workforce Planning</option>
                </select>
            </div>
            <div class="form-group">
                <label for="hr-rate">Rate:</label>
                <input type="number" id="hr-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('human_resources')">Generate Reports</button>
            <div id="hr-status" class="report-status" style="display: none;"></div>
        </div>

        <div class="department">
            <h2>Information Technology</h2>
            <div class="form-group">
                <label for="it-report">Select Report:</label>
                <select id="it-report">
                    <option value="infrastructure-assessment">Infrastructure Assessment</option>
                    <option value="security-audit">Security Audit</option>
                    <option value="system-performance">System Performance</option>
                    <option value="software-inventory">Software Inventory</option>
                </select>
            </div>
            <div class="form-group">
                <label for="it-rate">Rate:</label>
                <input type="number" id="it-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('information_technology')">Generate Reports</button>
            <div id="it-status" class="report-status" style="display: none;"></div>
        </div>

        <div class="department">
            <h2>Sales</h2>
            <div class="form-group">
                <label for="sales-report">Select Report:</label>
                <select id="sales-report">
                    <option value="sales-performance">Sales Performance</option>
                    <option value="customer-acquisition">Customer Acquisition</option>
                    <option value="sales-forecast">Sales Forecast</option>
                    <option value="lead-conversion">Lead Conversion</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sales-rate">Rate:</label>
                <input type="number" id="sales-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('sales')">Generate Reports</button>
            <div id="sales-status" class="report-status" style="display: none;"></div>
        </div>

        <div class="department">
            <h2>Customer Service</h2>
            <div class="form-group">
                <label for="cs-report">Select Report:</label>
                <select id="cs-report">
                    <option value="customer-satisfaction">Customer Satisfaction</option>
                    <option value="service-quality">Service Quality</option>
                    <option value="response-time">Response Time</option>
                    <option value="issue-resolution">Issue Resolution</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cs-rate">Rate:</label>
                <input type="number" id="cs-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('customer_service')">Generate Reports</button>
            <div id="cs-status" class="report-status" style="display: none;"></div>
        </div>

        <div class="department">
            <h2>Operations</h2>
            <div class="form-group">
                <label for="operations-report">Select Report:</label>
                <select id="operations-report">
                    <option value="production-efficiency">Production Efficiency</option>
                    <option value="inventory-management">Inventory Management</option>
                    <option value="supply-chain">Supply Chain</option>
                    <option value="maintenance-records">Maintenance Records</option>
                </select>
            </div>
            <div class="form-group">
                <label for="operations-rate">Rate:</label>
                <input type="number" id="operations-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('operations')">Generate Reports</button>
            <div id="operations-status" class="report-status" style="display: none;"></div>
        </div>

        <div class="department">
            <h2>Research and Development</h2>
            <div class="form-group">
                <label for="rnd-report">Select Report:</label>
                <select id="rnd-report">
                    <option value="product-innovation">Product Innovation</option>
                    <option value="rd-expenditure">R&D Expenditure</option>
                    <option value="prototype-testing">Prototype Testing</option>
                    <option value="technology-trends">Technology Trends</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rnd-rate">Rate:</label>
                <input type="number" id="rnd-rate" min="0" step="0.01" placeholder="Enter rate">
            </div>
            <button class="button" onclick="generateReport('research_and_development')">Generate Reports</button>
            <div id="rnd-status" class="report-status" style="display: none;"></div>
        </div>

        <!-- Add more departments and reports here -->

    </div>
<a href="admin dashboard.php" class="back-button">Back to Dashboard</a>
    <script>
        function generateReport(department) {
            const reportStatus = document.getElementById(`${department}-status`);

            const reportSelect = document.getElementById(`${department}-report`);
            const selectedReport = reportSelect.value;

            const rateInput = document.getElementById(`${department}-rate`);
            const rate = rateInput.value;

            let reportMessage = '';
            switch(selectedReport) {
                case 'financial-statement':
                    reportMessage = `Financial Statement generated successfully with rate: ${rate}`;
                    break;
                case 'budget-report':
                    reportMessage = `Budget Report generated successfully with rate: ${rate}`;
                    break;
                case 'expense-report':
                    reportMessage = `Expense Report generated successfully with rate: ${rate}`;
                    break;
                case 'income-statement':
                    reportMessage = `Income Statement generated successfully with rate: ${rate}`;
                    break;
                case 'marketing-strategy':
                    reportMessage = `Marketing Strategy Report generated successfully with rate: ${rate}`;
                    break;
                case 'campaign-performance':
                    reportMessage = `Campaign Performance Report generated successfully with rate: ${rate}`;
                    break;
                case 'market-research':
                    reportMessage = `Market Research Report generated successfully with rate: ${rate}`;
                    break;
                case 'customer-segmentation':
                    reportMessage = `Customer Segmentation Report generated successfully with rate: ${rate}`;
                    break;
                case 'employee-performance':
                    reportMessage = `Employee Performance Report generated successfully with rate: ${rate}`;
                    break;
                case 'training-needs-analysis':
                    reportMessage = `Training Needs Analysis Report generated successfully with rate: ${rate}`;
                    break;
                case 'attendance-report':
                    reportMessage = `Attendance Report generated successfully with rate: ${rate}`;
                    break;
                case 'workforce-planning':
                    reportMessage = `Workforce Planning Report generated successfully with rate: ${rate}`;
                    break;
                case 'infrastructure-assessment':
                    reportMessage = `Infrastructure Assessment Report generated successfully with rate: ${rate}`;
                    break;
                case 'security-audit':
                    reportMessage = `Security Audit Report generated successfully with rate: ${rate}`;
                    break;
                case 'system-performance':
                    reportMessage = `System Performance Report generated successfully with rate: ${rate}`;
                    break;
                case 'software-inventory':
                    reportMessage = `Software Inventory Report generated successfully with rate: ${rate}`;
                    break;
                case 'sales-performance':
                    reportMessage = `Sales Performance Report generated successfully with rate: ${rate}`;
                    break;
                case 'customer-acquisition':
                    reportMessage = `Customer Acquisition Report generated successfully with rate: ${rate}`;
                    break;
                case 'sales-forecast':
                    reportMessage = `Sales Forecast Report generated successfully with rate: ${rate}`;
                    break;
                case 'lead-conversion':
                    reportMessage = `Lead Conversion Report generated successfully with rate: ${rate}`;
                    break;
                case 'customer-satisfaction':
                    reportMessage = `Customer Satisfaction Report generated successfully with rate: ${rate}`;
                    break;
                case 'service-quality':
                    reportMessage = `Service Quality Report generated successfully with rate: ${rate}`;
                    break;
                case 'response-time':
                    reportMessage = `Response Time Report generated successfully with rate: ${rate}`;
                    break;
                case 'issue-resolution':
                    reportMessage = `Issue Resolution Report generated successfully with rate: ${rate}`;
                    break;
                case 'production-efficiency':
                    reportMessage = `Production Efficiency Report generated successfully with rate: ${rate}`;
                    break;
                case 'inventory-management':
                    reportMessage = `Inventory Management Report generated successfully with rate: ${rate}`;
                    break;
                case 'supply-chain':
                    reportMessage = `Supply Chain Report generated successfully with rate: ${rate}`;
                    break;
                case 'maintenance-records':
                    reportMessage = `Maintenance Records Report generated successfully with rate: ${rate}`;
                    break;
                case 'product-innovation':
                    reportMessage = `Product Innovation Report generated successfully with rate: ${rate}`;
                    break;
                case 'rd-expenditure':
                    reportMessage = `R&D Expenditure Report generated successfully with rate: ${rate}`;
                    break;
                case 'prototype-testing':
                    reportMessage = `Prototype Testing Report generated successfully with rate: ${rate}`;
                    break;
                case 'technology-trends':
                    reportMessage = `Technology Trends Report generated successfully with rate: ${rate}`;
                    break;
                // Add more cases for other reports here
                default:
                    reportMessage = 'No report generated.';
            }

            // Display report status
            reportStatus.textContent = reportMessage;
            reportStatus.classList.remove('error');
            reportStatus.classList.add('success');
            reportStatus.style.display = 'block';

            // Hide the status message after 5seconds
            setTimeout(function() {
                reportStatus.style.display = 'none';
            }, 5000);
        }
    </script>
</body>
</html>
