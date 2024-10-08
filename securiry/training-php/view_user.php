<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $encoded_id = $_GET['id'];
    $id = $userModel->decode_id($encoded_id);
    if ($id !== NULL) {
        $user = $userModel->findUserById($id); // Update existing user
    }
}

if (!empty($_POST['submit'])) {
    if (!empty($id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
<?php include 'views/header.php'?>
<div class="container">

    <?php if ($user || empty($id)) { ?>
        <div class="alert alert-warning" role="alert">
            User profile
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $userModel->encode_id($id); ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <span><?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?></span>
            </div>
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <span><?php if (!empty($user[0]['fullname'])) echo $user[0]['fullname'] ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <span><?php if (!empty($user[0]['email'])) echo $user[0]['email'] ?></span>
            </div>
        </form>
    <?php } else { ?>
        <div class="alert alert-success" role="alert">
            User not found!
        </div>
    <?php } ?>
</div>
</body>
</html>