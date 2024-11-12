<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$postsFile = 'posts.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = [
        'user_id' => $_SESSION['user_id'],
        'content' => $_POST['content'],
        'timestamp' => date("Y-m-d H:i:s")
    ];

    $posts = json_decode(file_get_contents($postsFile), true);
    $posts[] = $post;
    file_put_contents($postsFile, json_encode($posts));

    echo "Post created successfully!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
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
        <h2>Create Post</h2>
        <form action="post.php" method="POST">
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
    <footer class="footer"><p><i>CONNECTING DEVICES, UNLOCKING INSIGHTS!!</i></p>
        <div class="container"><p>@naominova3212</br> +256-763094194/+256-752151843</p>
            <p class="mb-0">&copy; 2024 Project Nova. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
