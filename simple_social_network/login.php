<?php
session_start();
$usersFile = 'users.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents($usersFile), true);

    foreach ($users as $user) {
        if ($user['username'] == $username && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $username; // Set session variable
            header("Location: profile.php");  // Redirect to profile page
            exit();
        }
    }

    echo "Invalid username or password.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
        body {
            background-color: rgb(23, 244, 8);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
    
        }
        .footer {
            background-color: #034439; 
            color: rgb(221, 236, 8);
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }
    </style>
    <div class="container mt-5">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <footer class="footer"><p><i>CONNECTING DEVICES, UNLOCKING INSIGHTS!!</i></p>
        <div class="container"><p>@naominova3212</br> +256-763094194/+256-752151843</p>
            <p class="mb-0">&copy; 2024 Project Nova. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
