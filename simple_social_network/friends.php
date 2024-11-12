<?php
require 'db_connection.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'social_network');
$user_id = $_SESSION['user_id'];
// Dummy friend list for demonstration purposes
$friends = array("friend1", "friend2", "friend3");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Friends List</h2>
        <ul class="list-group">
            <?php foreach ($friends as $friend): ?>
                