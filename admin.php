<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: not_logged.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <link rel="stylesheet" href="adminstyle.css">
    <link rel="stylesheet" href="navandbg.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="resourceImgs/6.png">

</head>
<body>
    <nav>
        <div class="nav-left">
            <img src="resourceImgs/6.png" alt="Logo 1" class="logo">
            <img src="resourceImgs/logo.png" alt="Logo 2" class="logo" id="logo2">
        </div>
        <div class="nav-links">
            <a href="admin.php" class="active">Admin Page</a>
            <a href="capstone.php">Project Description</a>
            <a href="members.php">Members</a>
        </div>
        <div class="logout-container">
            <a href="logout.php" class="logout-link">Logout</a>
        </div>
    </nav>

    <div class="wrapper">
    <div class="text-container">
        <h1>BATAANACCESS: AN INTEGRATED NAVIGATION, EMPLOYMENT, AND SAFETY MONITORING SYSTEM FOR PWDS USING USING ANDROID AND WEB TECHNOLOGIES
        </h1>
        <p>
            Our mission is to empower Persons with Disabilities (PWDs) in Bataan by fostering equal opportunities 
            in employment, enhancing mobility, and ensuring safer, more accessible environments. We recognize 
            the challenges that PWDs face daily, from securing jobs to navigating public spaces, and we are 
            committed to addressing these concerns through innovative and inclusive solutions.
        </p>
        <p>
            By leveraging technology, collaboration, and data-driven insights, we aim to create a more supportive 
            ecosystem where PWDs can thrive. Our initiative not only focuses on employment opportunities but also 
            on developing smarter infrastructure, promoting awareness, and ensuring that accessibility is at the 
            forefront of community development. Together, we can build a future where inclusivity is not just a 
            goal but a standard.
        </p>
        
    </div>
    <div class="image-container">
        <p class="credits">Image credit: Agoda.com</p>
    </div>
</div>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.body.style.opacity = "1";
            document.body.style.transform = "translateX(0)";
        });

        document.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                let href = this.getAttribute("href");


                if (!this.classList.contains("logout-link")) {
                    document.body.style.opacity = "0";
                    document.body.style.transform = "translateX(-100vw)";
                } else {
                    document.body.style.opacity = "0";
                    document.body.style.transform = "translateX(100vw)";
                }

                setTimeout(() => {
                    window.location.href = href;
                }, 400);
            });
        });
    </script>
</body>
</html>
