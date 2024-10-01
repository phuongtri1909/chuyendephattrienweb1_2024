<?php
session_start(); // Bắt đầu session
require_once 'models/UserModel.php';
$userModel = new UserModel();

if (!empty($_SESSION['id'])) {
    $logged_in_user_id = $_SESSION['id'];

    if (!empty($_GET['id'])) {
        $encoded_id = $_GET['id'];
        $id = $userModel->decode_id($encoded_id); 

        if ($id !== NULL && $id == $logged_in_user_id) {
            $userModel->deleteUserById($id);
            $_SESSION['message'] = 'Xóa người dùng thành công';
        } else {
            $_SESSION['message'] = 'Bạn không có quyền xóa người dùng này';
        }
    }
} else {
    $_SESSION['message'] = 'Bạn cần đăng nhập để thực hiện thao tác này';
}

header('location: list_users.php');
?>