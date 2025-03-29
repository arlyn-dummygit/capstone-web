<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Denied</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="resourceImgs/x.png">
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            font-family: 'Poppins', sans-serif;
            animation: fadeIn 1.2s ease-out;
        }

        .container {
            background: rgba(255, 255, 255, 0.15);
            padding: 30px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1.5s ease-out;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        a {
            margin-top: 50px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            background:rgb(155, 155, 155);
            padding: 12px 20px;
            border-radius: 5px;
            display: inline-block;
            transition: 0.3s, transform 0.2s;
            box-shadow: 0 3px 10px rgb(118, 117, 117);
        }

        a:hover {
            background: rgb(155, 155, 155);
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgb(118, 117, 117);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Access Denied</h1>
        <p>You are not properly logged in. Please return to the login page.</p>
        <a href="index.php">Back to Login</a>
    </div>
</body>
</html>
