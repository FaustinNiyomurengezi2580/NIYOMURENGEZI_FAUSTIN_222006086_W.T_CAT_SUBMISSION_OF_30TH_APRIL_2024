-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 02:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workers_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `accountant_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`accountant_id`, `username`, `password`, `name`, `email`, `role`) VALUES
(1, 'NIFA', '1234321', 'Omah Nifa', 'nifa@gmail.com', 'Finance '),
(2, 'MURENGEZI', '222006086', 'FAUSTIN', 'murengezi@gmail.com', 'HR'),
(3, 'toujour', '343434', 'John manzi', 'manzi@gmail.com', 'Finance'),
(4, 'christian', '99999', 'Jane ufitimana', 'jane@gmail.com', 'HR'),
(5, 'moses', '121212', 'Iraguha Johnson', 'iraguha.@gmail.com', 'Sales'),
(6, 'Ngumire', '443235', 'Alice Mushikiwabo', 'alice@gmail.com', 'sales'),
(7, 'sayless', '34343', 'David Shema', 'david@gmail.com', 'HR'),
(8, 'kabagema', '44444', 'Emma byicaza', 'emma@gmail.com', 'Finance'),
(23, 'gilbert', '343434', 'John manzi', 'manzi@gmail.com', 'Finance'),
(24, 'valentin', '99999', 'Jane ufitimana', 'jane@gmail.com', 'HR'),
(25, 'moshon', '121212', 'Iraguha Johnson', 'iraguha.@gmail.com', 'Sales'),
(38, 'gilbert mugisha', '343434', 'John manzi', 'manzi@gmail.com', 'Finance'),
(39, 'valentine', '99999', 'Jane ufitimana', 'jane@gmail.com', 'HR'),
(40, 'motion', '121212', 'Iraguha Johnson', 'iraguha.@gmail.com', 'Sales'),
(41, 'kamanzi', '443235', 'Alice Mushikiwabo', 'alice@gmail.com', 'sales'),
(42, 'lucie', '634443', 'David Shema', 'david@.com', 'HR'),
(43, 'solange', '00000', 'Emma byicaza', 'emma@gmail.com', 'Finance'),
(44, 'Ganza', '343434', 'Taaf Joshua', 'joshua@gmail.com', 'Finance'),
(45, 'NIYOMURENGEZI', '222006786', 'NIYOMURENGEZI FAUSTIN', 'niyomurengezi@gmail.com', 'sales'),
(47, 'intwari@gmail.com', '4444', 'Niyomurengezi Faustin', 'faustin@gmail.com', 'Finance'),
(59, 'faustinho', '22222', 'Faustin Niyomurengezi', 'faustin@gmail.com', 'Finance'),
(60, 'gisubizo', '101010', 'gisubizo jeannette', 'gisubizo@gmail.com', 'Finance'),
(61, 'vayo', '22222', 'kibirigi vayo', 'kibirigi@gmail.co', 'Finance'),
(62, 'vencent', '54545', 'vicent irambona', 'irambona@gmail.com', 'Finance'),
(63, 'fabien', '55555', 'king fabien', 'king@gmail.com', 'Finance'),
(64, 'kaka', '44443', 'kaka robert', 'robert@gmail.com', 'Finance'),
(67, 'NEYMAR', '12132', 'santos neymar', 'santos@gmail.com', 'Finance'),
(68, 'audile', '23232', 'Audile Ingabire', 'ingabire@gmail.com', 'Finance'),
(69, 'Ismael', '54545', 'Ismael Mwanafunzi', 'mwanafunzi@gmail.com', 'Finance'),
(70, 'caicedo', '222223', 'moses caicedo', 'moses@gmail.com', 'Finance'),
(71, 'faustin b', '222225', 'dada faustiiz', 'dada@gmail.com', 'Finance'),
(72, 'Ngumire OOG', '7878777', 'Ngumire Ismael', 'ngumire@gmail.com', 'Finance'),
(73, 'kazeneza@gmail.com', '7878777', 'Niyomurengezi Faustin', 'intwari@gmail.com', 'Finance'),
(76, 'sebukayire@gmail.com', '7878777', 'Niyomurengezi Faustin', 'lamarjp@gmail.com', 'Finance'),
(77, 'vayo@gmail.com', '444444', 'Niyomurengezi Faustin', 'lamarjp@gmail.com', 'Finance'),
(78, 'jaja@gmail.com', '7878777', 'keza cool', 'keza@gmail.com', 'Finance'),
(79, 'emmery@gmail.com', '7878777', 'emmery intwari', 'intwari@gmail.com', 'Finance'),
(80, 'izzy boy gilbert@gmail.com', '7878777', 'Niyonzima Gilbert', 'gilbert@gmail.com', 'Finance'),
(82, 'amani@gmail.com', '7878777', 'Aman Claude', 'amani@gmail.com', 'Finance'),
(83, 'gangster@gmail.com', '7878777', 'MURENGEZI GANGSTER', 'gangster@gmail.com', 'Finance'),
(85, 'camera', '7878777', 'camera man', 'cameraman@gmail.com', 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `email`, `role`) VALUES
(1, '', '222006086', 'NIYOMURENGEZI FAUSTIN', 'niyomurengezi@gmail.com', 'Administrator(System Manager)'),
(2, 'Faustiiz', '89898', 'omah nifa', 'faustiiz1@.com', 'Director'),
(3, 'mosesrwa', '55555', 'gallagher sano', 'sano@.com', 'IT Administrator'),
(4, 'izzy', '33333', 'cole debryne', 'cole.com', 'Finance Administrator'),
(5, 'boica', '22222', 'celestin mubi', 'mubi4@.com', ' sales Administrator'),
(6, 'palmer', '44444', 'yaka muana', 'yaka@.com', 'HR Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `sms_message` text DEFAULT NULL,
  `sms_sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone_number`, `email`, `location`, `sms_message`, `sms_sent_at`) VALUES
(1, '0780662323', 'intwari@gmail.com', 'Huye', 'allow me to work part time', '2024-04-30 08:04:05'),
(2, '0789314985', 'aman@gmail.com', 'RUBAVU', 'Can you allow me shift?', '2024-04-30 08:14:12'),
(3, '0790996567', 'niyomurengezifaustin222006086@gmail.com', 'Nyamasheke', 'Paroll checkup', '2024-04-30 08:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `editprofile`
--

CREATE TABLE `editprofile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editprofile`
--

INSERT INTO `editprofile` (`id`, `name`, `email`, `phone`, `position`, `department`, `location`, `joining_date`) VALUES
(2, 'NIYOMURENGEZI OMAH', 'niyo@gmail.com', '0790998550', 'project analysis', 'FINANCE', 'UK', '2024-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `generate_reports`
--

CREATE TABLE `generate_reports` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `report_type` varchar(255) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `generated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `generate_reports`
--

INSERT INTO `generate_reports` (`id`, `department`, `report_type`, `rate`, `generated_at`) VALUES
(1, 'Finance', 'Financial Statement', 100.00, '2024-04-28 20:36:19'),
(2, 'Marketing', 'Campaign Performance', 150.00, '2024-04-28 20:36:19'),
(3, 'Human Resources', 'Employee Performance', 120.00, '2024-04-28 20:36:19'),
(4, 'Information Technology', 'Security Audit', 200.00, '2024-04-28 20:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `manage_projects`
--

CREATE TABLE `manage_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manage_projects`
--

INSERT INTO `manage_projects` (`id`, `project_name`) VALUES
(1, 'Shift Scheduling App'),
(2, 'Performance Evaluation Tool'),
(3, 'Training Program Tracker'),
(4, 'Task Management Dashboard'),
(5, 'Employee Feedback Platform'),
(6, 'Leave Management System'),
(7, 'Project Management Tool'),
(8, 'Time Tracking Application'),
(9, 'Attendance Monitoring System');

-- --------------------------------------------------------

--
-- Table structure for table `payrollandsalary`
--

CREATE TABLE `payrollandsalary` (
  `id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `method` varchar(50) NOT NULL,
  `recipient_type` enum('Worker','Employee') NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `accountant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payrollandsalary`
--

INSERT INTO `payrollandsalary` (`id`, `amount`, `date`, `method`, `recipient_type`, `recipient_id`, `description`, `accountant_id`) VALUES
(1, 500.00, '2024-04-29', 'bank_transfer', 'Worker', 1, 'secretary', 1),
(2, 10000.00, '2024-04-16', 'check', 'Worker', 1, 'stock keeper', 1),
(3, 100000.00, '2024-04-18', 'cash', 'Worker', 1, 'advertiser', 1),
(4, 500500.00, '2024-05-09', 'cash', 'Worker', 1, 'HR MANAGER', 1),
(5, 600000.00, '2024-04-16', 'cash', 'Worker', 1, 'SOCIAL MEDIA', 1),
(6, 550000.00, '2024-04-06', 'check', 'Worker', 1, 'Cahier', 1),
(7, 400000.00, '2024-04-25', 'check', 'Worker', 1, 'Communication', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `budget` varchar(50) NOT NULL,
  `usage_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `name`, `description`, `budget`, `usage_description`) VALUES
(1, 'Monthly Budget Report', 'Analysis of income and expenses for the current month.', 'RWF100000', 'Salary, Utilities, Office Supplies'),
(2, 'Quarterly Financial Statement', 'Summary of financial performance for the past quarter.', '$2500', 'Rent, Insurance, Equipment Maintenance'),
(3, 'Annual Profit and Loss Report', 'Overview of annual revenue, expenses, and net profit.', '$5000', 'Marketing, Training, Travel Expenses'),
(4, 'Cash Flow Analysis', 'Examination of cash inflows and outflows over a specific period.', '15000', 'Consulting Fees, Software Licenses, Advertising'),
(5, 'Balance Sheet', 'Statement of assets, liabilities, and equity at a specific point in time.', '$2000', 'Legal Fees, Taxes, Professional Development');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`) VALUES
(1, 'Scheduling', 'Efficiently schedule tasks and assignments for your workforce. Our system allows you to create, assign, and manage schedules easily, ensuring that each task is completed on time and by the right team member.'),
(2, 'Task Assignment', 'Assign tasks to individual workers or teams based on their skills, availability, and workload. With our intuitive task assignment features, you can distribute work evenly and effectively across your workforce.'),
(3, 'Performance Tracking', 'Monitor the performance of your workforce in real-time. Our system provides comprehensive performance tracking tools, including progress reports, task completion rates, and feedback mechanisms, allowing you to assess individual and team performance accurately.'),
(4, 'Task Prioritization', 'Prioritize tasks based on their urgency, importance, and deadlines. Our system enables you to categorize tasks, set priorities, and allocate resources efficiently, ensuring that critical tasks are completed first.'),
(5, 'Collaboration', 'Promote collaboration and teamwork among your workforce. Our system facilitates communication, file sharing, and collaboration tools, allowing team members to work together seamlessly and achieve common goals.');

-- --------------------------------------------------------

--
-- Table structure for table `view employees`
--

CREATE TABLE `view employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `view employees`
--

INSERT INTO `view employees` (`id`, `name`, `department`) VALUES
(1, 'Manzi Thierry', 'Finance'),
(2, 'Niyo Faustin', 'Marketing'),
(3, 'ToutJour Izzy BOY', 'Human Resources'),
(4, 'Faustiiz Brown', 'Information Technology'),
(5, 'Kagabo David', 'Operations'),
(6, 'Sarah Kabano', 'Customer Service'),
(7, 'Kwizera Martinez', 'Sales'),
(8, 'MURENGEZI Taylor', 'Research and Development'),
(9, 'William KING RUGEMANA', 'Legal'),
(10, 'Olivia IRASUBIZA', 'Quality Assurance'),
(11, 'Christopher MUNEZA', 'Production'),
(12, 'John Kabagema', 'Engineering'),
(13, 'Jeanne Irasubiza', 'Customer Support'),
(14, 'Hirwa Johnson', 'Research'),
(15, 'Jackson Semashyimbo', 'Human Resources'),
(16, 'David Kega', 'Finance'),
(17, 'Emile Kagabo', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `viewprofile`
--

CREATE TABLE `viewprofile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `position` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `viewprofile`
--

INSERT INTO `viewprofile` (`id`, `name`, `email`, `phone`, `position`, `department`, `location`, `joining_date`) VALUES
(1, 'MURENGEZI FAUSTIN', 'murengezi@gmail.com', '+250784933362', 'Software Developer', 'IT', 'Rwanda', '2024-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `position` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `hire_date` date NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `accountant_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `first_name`, `last_name`, `email`, `phone`, `position`, `department`, `salary`, `hire_date`, `admin_id`, `accountant_id`) VALUES
(2, 'John', 'Kabagema', 'faustin@gmail.com', '1234567890', 'Sales Associate', 'Sales', 35000.00, '2024-04-15', 1, 1),
(4, 'kanyombya', 'Johnson', 'kanyombya@gmail.com', '9876543210', 'Software Engineer', 'Project Manager', 80000.00, '2024-04-25', 1, 1),
(5, 'saliba', 'William', 'alice.william@gmail.com', '0123456789', 'Human Resources Assistant', 'HR', 40000.00, '2024-04-10', 1, 1),
(6, 'David', 'bayingana', 'bayingana@gmail.com', '9012345678', 'Operations Manager', 'Operations', 70000.00, '2024-04-05', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `workerslist`
--

CREATE TABLE `workerslist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workerslist`
--

INSERT INTO `workerslist` (`id`, `name`, `position`, `salary`) VALUES
(1, 'NIYOMURENGEZI FAUSTIN', 'Manager', 'RWF500000'),
(2, 'RUGEMANA CHRISTIAN', 'Developer', '$4000'),
(3, 'ASANTE PASCAL', 'Accountant', '$4500'),
(4, 'ANGE BAGWIRE', 'Sales Associate', '$3800');

-- --------------------------------------------------------

--
-- Table structure for table `worker_register`
--

CREATE TABLE `worker_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `jobTitle` varchar(255) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_register`
--

INSERT INTO `worker_register` (`id`, `name`, `email`, `password`, `contact`, `address`, `jobTitle`, `department`) VALUES
(1, 'Alice murazeyesu', 'alice@gmail.com', '90909', '9876543210', '456 kimisagara St, nyarugenge, Rwanda', 'HR Specialist', 'HR'),
(2, 'Murara Johnson', 'johnson.com', '67676', '5551234567', '789 Huye St,Mburabuturo,Rwanda', 'Financial Analyst', 'Finance'),
(3, 'james gatete', 'gatete@gmail.com', '78787', '9998887776', '321 kacyiru St, , Rwanda', 'Operations Manager', 'Operations'),
(4, 'Niyomurengezi Faustin', 'faustin@gmail.com', '22222', '0784933362', 'Nyamasheke', 'Cashier', 'Finance'),
(5, 'Niyomurengezi Faustin', 'faustin@gmail.com', '22222', '2345678666', 'huye', 'IT', 'IT'),
(6, 'CHRISS RUGEMANA', 'rugemana@gmail.com', '90909', '0790998550', 'kigali', 'hr', 'HR'),
(7, 'CHRISS SHEMA', 'SHEMA@gmail.com', '78787', '2345678666', 'GICUMBI', 'IT', 'IT'),
(8, 'KAZENEZA', 'kazeneza@gmail.com', '7878777', '0784933365', 'Gikondo', 'sales', 'Operations');

-- --------------------------------------------------------

--
-- Table structure for table `worker_settings`
--

CREATE TABLE `worker_settings` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `employment_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worker_settings`
--

INSERT INTO `worker_settings` (`id`, `department`, `shift`, `employment_type`) VALUES
(1, 'hr', 'day', 'full-time'),
(2, 'it', 'night', 'part-time'),
(3, 'finance', 'day', 'full-time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`accountant_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editprofile`
--
ALTER TABLE `editprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generate_reports`
--
ALTER TABLE `generate_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_projects`
--
ALTER TABLE `manage_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payrollandsalary`
--
ALTER TABLE `payrollandsalary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accountant_id` (`accountant_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view employees`
--
ALTER TABLE `view employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewprofile`
--
ALTER TABLE `viewprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `accountant_id` (`accountant_id`);

--
-- Indexes for table `workerslist`
--
ALTER TABLE `workerslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker_register`
--
ALTER TABLE `worker_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker_settings`
--
ALTER TABLE `worker_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `accountant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `editprofile`
--
ALTER TABLE `editprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generate_reports`
--
ALTER TABLE `generate_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_projects`
--
ALTER TABLE `manage_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payrollandsalary`
--
ALTER TABLE `payrollandsalary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `view employees`
--
ALTER TABLE `view employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `viewprofile`
--
ALTER TABLE `viewprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `workerslist`
--
ALTER TABLE `workerslist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worker_register`
--
ALTER TABLE `worker_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `worker_settings`
--
ALTER TABLE `worker_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payrollandsalary`
--
ALTER TABLE `payrollandsalary`
  ADD CONSTRAINT `payrollandsalary_ibfk_1` FOREIGN KEY (`accountant_id`) REFERENCES `accountant` (`accountant_id`);

--
-- Constraints for table `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `workers_ibfk_2` FOREIGN KEY (`accountant_id`) REFERENCES `accountant` (`accountant_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
