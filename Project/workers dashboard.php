<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to the Dashboard</title>
  <style>
    /* Basic styles for layout */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }
    .container {
      background-image: url('dashboard.jpg');
      background-size: contain; /* Adjusted to contain */
      background-repeat: no-repeat; /* Prevents image repetition */
      background-position: center;
      height: 100vh; /* Adjusted to cover the entire viewport height */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .header {
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      padding: 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .header input[type="text"] {
      padding: 20px;
      border-radius: 40px;
      border: none;
    }
    .header button {
      padding: 20px 40px;
      border-radius: 20px;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .header button:hover {
      background-color: #0056b3;
    }
    .button-container {
      padding: 20px;
      text-align: center;
    }
    .button-container button {
      padding: 10px 20px;
      border-radius: 20px;
      border: none;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin: 0 10px;
    }
    .button-container button:hover {
      background-color: #0056b3;
    }
    .button-container .sticker {
      position: absolute;
      top: 0;
      left: 0;
      width: 8px;
      height: 100%;
      background-color: #007bff;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }
    .content {
      padding: 20px;
    }
    .dropdown {
      position: relative;
      display: inline-block;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: rgba(0, 0, 0, 0.5);
      min-width: 100px;
      padding: 20px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      border-radius: 10px;
      color: #fff;
    }
    .dropdown-content a {
      display: block;
      color: #fff;
      text-decoration: none;
      padding: 10px 0;
    }
    .dropdown-content a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }
    footer {
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      padding: 20px;
      text-align: center;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    footer h2 {
      margin-bottom: 10px;
    }
    .contact-info {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .contact-item {
      display: flex;
      align-items: center;
      margin: 0 20px;
    }
    .contact-item img {
      width: 30px;
      margin-right: 10px;
      filter: invert(70%) sepia(100%) saturate(750%) hue-rotate(200deg);
    }
    .social a {
      margin-left: 10px;
      text-decoration: none;
      color: #fff;
    }
    .social img {
      width: 20px;
      height: 20px;
      margin-left: 5px;
    }
  </style>

</head>
<b><center><h1>WORKERS DAHBOARD</h1></center></b>
<body>
  <div class="container">
    <header class="header">
      <div class="dropdown">
        <button class="dropbtn">Settings</button>
        <div class="dropdown-content">
          <a href="view profile.php">View Profile</a>
          <a href="edit profile.php">Edit Profile</a>
          <a href="index.php" id="logoutBtn">Logout</a>
        </div>
      </div>
      <div>
        <input type="text" placeholder="">
        <button id="searchBtn">Search</button>
      </div>
    </header>
    <div class="button-container">
      <button id="homeBtn" onclick="location.href='index.php'">Home<span class="sticker"></span></button>

      <button id="servicesBtn" onclick="location.href='services.php'">services<span class="sticker"></span></button>
      <button id="aboutBtn" onclick="location.href='about us.php'">About Us<span class="sticker"></span></button>
      <button id="contactBtn" onclick="location.href='contact us.php'">Contact Us<span class="sticker"></span></button>
      <button id="tasksBtn" onclick="location.href='Tasks.php'">Tasks<span class="sticker"></span></button>

      <button id="notificationsBtn" onclick="location.href='notifications.php'">Notifications<span class="sticker"></span></button>
    </div>
    <content class="content">
    </content>
    <footer>
      <div>
        <h2>About Us</h2>
        <p>
          My wms is designed to develop an intuitive and efficient worker management system that empowers organizations to streamline their workforce operations, enhance productivity, and promote employee satisfaction. 

      </div>
      
      <div>
        <h2>Contact Us</h2>
        <div class="contact-info">
          <div class="contact-item">
            <img src="address.png" alt="address">
            <p>RN1 HUYE, RWANDA</p>
          </div>
          <div class="contact-item">
            <img src="email.png" alt="Email">
            <p>nifawms@gmail.com</p>
          </div>
          <div class="contact-item">
            <img src="phone.png" alt="Phone">
            <p>+250 784933362</p>
          </div>
        </div>
      </div>
      
      <div class="social">
        <b><h1>Social Media</h1></b>

        <a href="https://www.facebook.com"><img src="facebook.png" alt="Facebook"></a>
        <a href="https://www.twitter.com"><img src="twitter.png" alt="Twitter"></a>
        <a href="https://www.instagram.com"><img src="insta.png" alt="Instagram"></a>
      </div>
    </footer>
  </div>

  <script>
    // JavaScript for search functionality
    document.getElementById('searchBtn').addEventListener('click', function() {
      var searchTerm = document.querySelector('.header input[type="text"]').value.trim();
      if (searchTerm !== '') {
        // Perform search operation, e.g., redirect to search results page
        alert('Searching for: ' + searchTerm);
      } else {
        alert('Please enter a search term');
      }
    });

    // JavaScript for logout functionality
    document.getElementById('logoutBtn').addEventListener('click', function() {
      // Perform logout operation, e.g., redirect to login page
      alert('Logging out...');
    });

    // JavaScript for contact functionality
    document.getElementById('contactBtn').addEventListener('click', function() {
      // Perform contact operation, e.g., open contact page
      alert('Opening contact page...');
    });

    // JavaScript for home functionality
    document.getElementById('homeBtn').addEventListener('click', function() {
      // Perform home operation, e.g., redirect to home page
      alert('Redirecting to home...');
    });

    // JavaScript for tasks functionality
    document.getElementById('tasksBtn').addEventListener('click', function() {
      // Perform tasks operation, e.g., open tasks page
      alert('Opening tasks...');
    });

    // JavaScript for notifications functionality
    document.getElementById('notificationsBtn').addEventListener('click', function() {
      // Perform notifications operation, e.g., open notifications page
      alert('Opening notifications...');
    });
  </script>
</body>
</html>
