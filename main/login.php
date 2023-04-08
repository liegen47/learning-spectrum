<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/web/svg_file/logo.png">
  <title>Learning Spectrum</title>
</head>

<body>
  <header class="navbar">
    <a href="#">
      <img src="/web/svg_file/logo.png" alt="learning Logo" class="logo">
    </a>
    <div class="categories">
      <section class="category-section">
        <button class="category active">SYLLABUS</button>
        <button class="category" onclick="window.location.href='http://cbseacademic.nic.in/web_material/Curriculum19/Main-SeniorSecondary/14_Computer_science_New.pdf';">
          Computer science
        </button>
        <button class="category" onclick="window.location.href='https://cbseacademic.nic.in/web_material/CurriculumMain23/SrSec/Physics_SrSec_2022-23.pdf';">
          Physics
        </button>
        <button class="category" onclick="window.location.href='https://cbseacademic.nic.in/web_material/CurriculumMain23/SrSec/Chemistry_SrSec_2022-23.pdf';">
          Chemistry
        </button>
        <button class="category" onclick="window.location.href='https://cbseacademic.nic.in/web_material/CurriculumMain22/termwise/SrSecondary/Biology_2021-22.pdf';">
          Biology
        </button>
    </div>
    <div class="menu-icons">
      <button class="home active" onclick="window.location.href='/web/main/login.html';">LOGIN</button>
      <button class="home" onclick="window.location.href='/web/main/register.html';">Register</button>
      <a href="https://myaccount.google.com/u/0/?utm_source=YouTubeWeb&tab=rk&utm_medium=act&tab=rk&hl=en-GB">
        <img class="menu-channel-icon" src="https://yt3.ggpht.com/yti/APfAmoE6dTHXlcINRkzGn9MvIhRFCNPCCWNOcTK7pfSWtUE=s88-c-k-c0x00ffffff-no-rj-mo" alt="YOUR CHANNEL">
      </a>
    </div>
  </header>
  <form action="login.php" method="post">
    <section class="contact_section layout_padding">
      <div class="container">
        <div class="heading_container heading_center">
          <h2 style="text-align:center">LOGIN : Start your learning Journey Today</h2>
        </div>
        <div class="contact_form-container">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" placeholder="Username" name="username">
            </div>
            <div class="col-sm-6">
              <input type="password" placeholder="password" name="password" />
            </div>
            <div class="btn_box">
              <button type="submit" name="submit">Submit</button>
            </div>
          </div>

        </div>
      </div>
    </section>
  </form>
  </div>
</body>

</html>
<?php
include('connection.php');
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `login` WHERE  username ='$username'";
  $result = mysqli_query($db, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $resultPassword = $row['password'];
    if ($password == $resultPassword) {
      header('Location: index.html');
    } else {
      echo "<script>
               alert('Login Unsuccessful');
               </script>";
    }
  }
}
?>