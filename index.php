<?php
    require 'inc/dbsetting.php';

    if(isset($_POST['send']) && isset($_SESSION['user_id']))
    {
    $sql = "INSERT INTO messages (user_id, message) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->execute([$_SESSION['user_id'], $_POST['message']]);

    header('Location: index.php');
    exit;
    }

    $sql = "SELECT messages.message, messages.created_at, users.username
    FROM messages
    JOIN users ON messages.user_id = users.id
    ORDER BY messages.created_at DESC";
    $messages = $con->query($sql)->fetchALL();

    require 'inc/header.php';
    require 'inc/main.php';
    require 'inc/footer.php';
?>