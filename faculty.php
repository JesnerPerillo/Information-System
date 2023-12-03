<?php
  require 'conf.php';
  if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
  }else{
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="faculty.css">
  <title>Project</title>
</head>
<body>
    <nav>
      <div class="logo-name">
        <div class="logo-image">
          <img src="images/admin.svg" alt="admin logo">
        </div>
        <span class="logo_name"><?php echo $row["username"];?></span>
      </div>
      <div class="menu-items">
        <ul class="nav-links">
          <li><a href="index.php">
            <i class="uil uil-estate"></i>
            <span class="link-name">Dashboard</span>
          </a></li>
          <li><a href="Account.php">
            <i class="uil uil-user"></i>
            <span class="link-name">Account</span>
          </a></li>
          <li class="colored"><a href="">
            <i class="uil uil-users-alt"></i>
            <span id="coloredd" class="link-name">Faculties</span>
          </a></li>
          <li><a href="task.php">
            <i class="uil uil-clipboard-notes"></i>
            <span class="link-name">Tasks</span>
          </a></li>
          <li><a href="report.php">
            <i class="uil uil-chart-bar"></i>
            <span class="link-name">Reports</span>
          </a></li>
          <li><a href="database.php">
          <i class="uil uil-database"></i>
            <span class="link-name">Database</span>
          </a></li>
        </ul>

        <ul class="logout">
          <li><a href="logout.php">
            <i class="uil uil-signout"></i>
            <span class="link-name">Log out</span>
          </a></li>
          <li class="mode"><a href="">
            <i class="uil uil-moon"></i>
            <span class="link-name">Dark Mode</span>
          </a>
            <div class="mode-toggle">
              <span class="switch"></span>
            </div>
        </li>
        </ul>
      </div>
    </nav>

    <section class="dashboard">
        <div class="dash-menu">
          <i class="uil uil-sitemap"></i>
          <p>FACULTIES</p>
        </div>
        <div class="prof">
          <img src="images/admin.svg" alt="Admin">
        </div>
    </section>

      <div class="container">
        <img src="images/partner.svg" alt="Partner">
      </div>

      <div class="text">
        <p>Find Your Colleagues Here!</p>
        <div class="con">
          <div class="dropdown">
            <div class="select">
              <span class="selected">Colleges</span>
              <div class="caret"></div>
            </div>
            <ul class="menu">
              <li>College of Science</li>
              <li>College of Education</li>
              <li>College of Engineering</li>
              <li>College of Industrial Technology</li>
            </ul>
          </div><br><br>
          <div class="dropdown">
            <div class="select">
              <span class="selected">Year</span>
              <div class="caret"></div>
            </div>
            <ul class="menu">
              <li>1st Year</li>
              <li>2nd Year</li>
              <li>3rd Year</li>
              <li>4th Year</li>
              <li>5th Year</li>
            </ul>
          </div>
          <div class="help">
            <i class="uil uil-question-circle"></i>
            <p>Help</p>
          </div>
        </div>
      </div>
    <script src="dropdown.js"></script>
    <script src="script.js"></script>
</body>
</html>