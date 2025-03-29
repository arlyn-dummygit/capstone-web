<?php
session_start();

// credentials
$valid_username = "admin@company.ph";
$valid_password = "password123";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        header('Location: admin.php');
        exit();
    } else {
        header('Location: not_logged.php');
        exit();
    }
}
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="resourceImgs/6.png">
    <style>
        @keyframes moveGradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: radial-gradient(circle, rgba(61,101,133,1) 0%, rgba(255,250,240,1) 100%);
            background-size: 200% 200%;
            animation: moveGradient 10s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .header {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
        }

        @keyframes textColorChange {
            0% { color: #3D6585; }
            50% { color: white; }
            100% { color: #3D6585; }
        }

        .bataan-access-text {
            font-size: 40px;
            font-weight: bold;
            font-family: Arial, sans-serif;
            animation: textColorChange 10s infinite ease-in-out;
        }

        @keyframes rollFromRight {
            0% { transform: translateX(100vw) rotate(0deg); }
            100% { transform: translateX(0) rotate(-360deg); }
        }

        .rolling-icon {
            width: 60px;
            height: 60px;
            margin-left: 10px;
            background: url('resourceImgs/6.png') no-repeat center;
            background-size: contain;
            animation: rollFromRight 2s ease-in-out forwards;
        }

        .reg {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            opacity: 0;
            animation: fadeIn 1s ease-out 2s forwards;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .reg:hover {
            transform: scale(1.02);
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.3);
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .reg label {
            font-size: 18px;
            margin-bottom: 5px;
            font-weight: bold;
            color: #3D6585;
            text-align: left;
            display: block;
        }

        .reg input {
            width: 94%;
            height: 20px;
            margin-bottom: 10px;
            border: 1px solid #3D6585;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            background: rgba(240, 240, 240, 1);
            transition: 0.3s ease, transform 0.2s ease;
        }

        .reg input:focus {
            background: white;
            outline: none;
            transform: scale(1.02);
        }

        .reg button {
            height: 45px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .reg button[type="submit"] {
            background: linear-gradient(135deg, #3D6585, #1a3b60);
            color: white;
            box-shadow: 0px 4px 10px rgba(61, 101, 133, 0.5);
        }

        .reg button[type="submit"]:hover {
            background: linear-gradient(135deg, #1a3b60, #0d243d);
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(61, 101, 133, 0.7);
        }

        .reg button[type="reset"] {
            background: rgba(61, 61, 61, 0.8);
            color: white;
            box-shadow: 0px 4px 10px rgba(44, 44, 44, 0.5);
        }

        .reg button[type="reset"]:hover {
            background: red;
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(200, 0, 0, 0.7);
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="bataan-access-text">BATAAN ACCESS</div>
        <div class="rolling-icon"></div>
    </div>
    
    <form method="POST" action="" class="reg">
        <h1>Login</h1>
        <label>Username: <input type="text" name="username" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

</body>
</html>
