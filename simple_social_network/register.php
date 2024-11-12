<?php
session_start();
$usersFile = 'users.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $users = json_decode(file_get_contents($usersFile), true);

    $users[] = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
    ];

    file_put_contents($usersFile, json_encode($users));

    echo "Registration successful!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            background-color: #343a40;
            color: rgb(221, 236, 8);
            text-align: center;
            padding: 10px 0;
            margin-top: auto;
        }
    </style>



    <div class="container mt-5">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <class="nav-item"><a class="nav-link" href="login.php">Login</a>
        </form>
    </div>

    <footer class="footer"><p><i>CONNECTING DEVICES, UNLOCKING INSIGHTS!!</i></p>
        <div class="container"><p>@naominova3212</br> +256-763094194/+256-752151843</p>
            <p class="mb-0">&copy; 2024 Project Nova. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
