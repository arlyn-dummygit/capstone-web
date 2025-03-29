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
    
    <title>Members</title>
    <link rel="stylesheet" href="memberstyle.css">
    <link rel="stylesheet" href="navandbg.css">
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
            <a href="admin.php">Admin Page</a>
            <a href="capstone.php">Project Description</a>
            <a href="members.php" class="active">Members</a>
        </div>
        <div class="logout-container">
            <a href="logout.php" class="logout-link">Logout</a>
        </div>
    </nav>

        <h1>Meet Our Team</h1>

    <div class="container">
        <div class="member-card" onclick="toggleCard(this)">
            <img src="memberImgs/member1_arlyn.png" alt="Arlyn Musada">
            <div class="member-info">
                <h3>Arlyn C. Musada</h3>
                <p class="role">Project Manager & Backend Developer</p>
                <div class="extra-info">
                    <h4>Other Information</h4>
                    <p><strong>Address:</strong> Mariveles, Bataan</p>
                    <p>Oversees project timelines and handles backend development.</p>
                </div>
            </div>
        </div>

        <div class="member-card" onclick="toggleCard(this)">
            <img src="memberImgs/member2_daniela.jpg" alt="Daniela Ruth">
            <div class="member-info">
                <h3>Daniela Ruth P. Angcos</h3>
                <p class="role">UI/UX Designer</p>
                <div class="extra-info">
                     <h4>Other Information</h4>
                    <p><strong>Address:</strong> Balanga, Bataan</p>
                    <p>Creates intuitive and visually appealing interfaces.</p>
                </div>
            </div>
        </div>

        <div class="member-card" onclick="toggleCard(this)">
            <img src="memberImgs/member3_tejedo.jpg" alt="Tejedo San Juan">
            <div class="member-info">
                <h3>Tejedo I. M. San Juan</h3>
                <p class="role">Frontend Developer</p>
                <div class="extra-info">
                    <h4>Other Information</h4>
                    <p><strong>Address:</strong> Limay, Bataan</p>
                    <p>Transforms design concepts into functional web pages.</p>
                </div>
            </div>
        </div>

        <div class="member-card" onclick="toggleCard(this)">
            <img src="memberImgs/member4_christian.jpg" alt="Christian Guzman">
            <div class="member-info">
                <h3>Christian D. De Guzman</h3>
                <p class="role">Quality Assurance</p>
                <div class="extra-info">
                    <h4>Other Information</h4>
                    <p><strong>Address:</strong> Orani, Bataan</p>
                    <p>Ensures high performance and bug-free experiences.</p>
                </div>
            </div>
        </div>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function () {
    document.body.classList.add("loaded");

    const memberCards = document.querySelectorAll(".member-card");

    memberCards.forEach(card => {
        card.addEventListener("click", function (event) {
            event.stopPropagation();
            const isActive = this.classList.contains("active");
            
            memberCards.forEach(c => {
                c.classList.remove("active");
                c.querySelector(".extra-info").style.visibility = "hidden";
                c.querySelector(".extra-info").style.opacity = "0";
                c.querySelector(".extra-info").style.maxHeight = "0";
            });

            if (!isActive) {
                this.classList.add("active");
                this.querySelector(".extra-info").style.visibility = "visible";
                this.querySelector(".extra-info").style.opacity = "1";
                this.querySelector(".extra-info").style.maxHeight = "200px";

                setTimeout(() => {
                    this.scrollIntoView({ behavior: "smooth", block: "center" });
                }, 200);
            }
        });
    });

    document.addEventListener("click", function () {
        memberCards.forEach(card => {
            card.classList.remove("active");
            card.querySelector(".extra-info").style.visibility = "hidden";
            card.querySelector(".extra-info").style.opacity = "0";
            card.querySelector(".extra-info").style.maxHeight = "0";
        });
    });
});


</script>
    
</body>
</html>
