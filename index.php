<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin: 0;
            background-color: #f1f1f1;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form method="POST" action="./Controller/login_controller.php">
            <input type="text" placeholder="Tên đăng nhập">
            <input type="password" placeholder="Mật khẩu">
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
