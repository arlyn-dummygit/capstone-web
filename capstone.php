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
    <title>Project Description</title>
    <link rel="stylesheet" href="navandbg.css">
    <link rel="stylesheet" href="capstonestyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="resourceImgs/6.png">
</head>
<body>
<nav>
        <div class="nav-left">
            <img src="resourceImgs/6.png" alt="Logo 1" class="logo">
            <img src="resourceImgs/logo.png" alt="Logo 2" class="logo">
        </div>
        <div class="nav-links">
            <a href="admin.php" >Admin Page</a>
            <a href="capstone.php" class="active">Project Description</a>
            <a href="members.php">Members</a>
            </div>
    <div class="logout-container">
        <a href="logout.php" class="logout-link">Logout</a>
    </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="project-description">
            <p>
                <strong>BataanAccess</strong></p>
            <p> is an integrated digital platform designed to empower Persons with Disabilities (PWDs) in Bataan 
                by providing accessible employment opportunities, safe mobility options, and real-time safety monitoring. 
                The system addresses key challenges such as job discrimination, public transportation accessibility, 
                and safety concerns through a centralized platform that connects PWDs, employers, and caregivers.
            </p>
        </div>
        
        <div class="key-features">
            <h2>Key Features</h2>
            <div class="feature">
                <img src="resourceImgs/inc.png" alt="Job Listings" class="feature-img"> 
                <strong>Inclusive Job Listings:</strong> A portal where PWDs can find job opportunities tailored to their needs while helping businesses ensure workplace accessibility.
            </div>
            <div class="feature">
                <img src="resourceImgs/map.png" alt="Accessible Routes" class="feature-img">   
                <strong>Accessible Route Navigation:</strong> Integration with Google Maps API to generate real-time, PWD-friendly routes with accessibility features like wheelchair ramps.
            </div>
            <div class="feature">
                <img src="resourceImgs/monitor.png" alt="Safety Monitoring" class="feature-img">   
                <strong>Safety Monitoring & Emergency Alerts:</strong> A real-time tracking system that enables caregivers to monitor PWD locations, receive emergency alerts, and ensure their well-being.
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.body.classList.add("loaded");

        document.querySelectorAll("a").forEach(link => {
            link.addEventListener("click", function(event) {
                if (this.href.includes("logout.php")) return; 

                event.preventDefault();
                let href = this.href;

                document.body.classList.remove("slide-left", "slide-right");

                if (this.href.includes("members.php")) {
                    document.body.classList.add("slide-right");
                } else if (this.href.includes("admin.php")) {
                    document.body.classList.add("slide-left");
                }

                setTimeout(() => {
                    window.location.href = href;
                }, 400);
            });
        });
    });
    </script>
</body>
</html>
