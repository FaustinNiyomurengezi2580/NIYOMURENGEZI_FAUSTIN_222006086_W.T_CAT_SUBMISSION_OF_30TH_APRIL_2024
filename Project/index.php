<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers Management System</title>
    <style>
        /* Your CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('image 10.JPG');
            background-size: cover;
            background-position: center;
            text-align: center;
            position: relative;
            
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 60px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding opacity to the background */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative; /* Added */
            background-color: yellowgreen;
        }
        h1 {
            color: #0a0909;
        }
        p {
            color: #050505;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 10px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 250px; /* Adjust the size of the logo */
            height: auto; /* Maintain aspect ratio */
        }
        /* New styles for the about us button */
        .about-us-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .about-us-btn:hover {
            background-color: #0056b3;
        }
        /* New styles for the contact us button */
        .contact-us-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }
        .contact-us-btn:hover {
            background-color: #0056b3;
        }
        .header img {
            width: 150px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>

<body>
    
    
    <div class="container">
        <marquee><h1><b>Welcome To Workers Management System</b></h1></marquee>
        <i><p>Efficiently Manage Your Workforce With Our Intuitive System.</p></i>
        <a href="contact us.php" class="contact-us-btn">Contact Us</a> <!-- Link to your Contact Us page -->
        <a href="about us.php" class="about-us-btn">About Us</a> <!-- Link to your About Us page -->
        <button class="btn" onclick="redirectTo('workers register.php')">Get Started</button> <!-- Change the URL here -->
        <button class="btn" onclick="redirectTo('login.php')">Login</button>
    </div>

    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
    <footer>
        <i><b><h1>Contacts<h1><b><i>
        <p>123 Kimisagara, Kigali, Rwanda</p>
        <p>Email:nifawms@gmail.com</p>
        <p>Phone: +250784933362</p>
        <p>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
        </p>
    </footer>
</body>
</html>
