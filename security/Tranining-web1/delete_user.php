<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();


$_SESSION['user_id'] = 2; 
$currentUserId = $_SESSION['user_id']; 
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    if ($currentUserId != $id) {
        die("You do not have permission to delete this user.");
    }
    $userModel->deleteUserById($id);
}

header('location: list_users.php');
?>