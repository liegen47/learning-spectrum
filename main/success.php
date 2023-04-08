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
            <button class="home"  onclick="window.location.href='/web/main/login.html';">LOGIN</button>
            <button class="home active" onclick="window.location.href='/web/main/register.html';">Register</button>
            <a href="https://myaccount.google.com/u/0/?utm_source=YouTubeWeb&tab=rk&utm_medium=act&tab=rk&hl=en-GB">
                <img class="menu-channel-icon" src="https://yt3.ggpht.com/yti/APfAmoE6dTHXlcINRkzGn9MvIhRFCNPCCWNOcTK7pfSWtUE=s88-c-k-c0x00ffffff-no-rj-mo" alt="YOUR CHANNEL">
            </a> 
        </div>
    </header>
    <div class="container"><h2>
        <?php
        echo "Registered successfully!";
    ?>  </h2>
     </div>
</body>
</html>