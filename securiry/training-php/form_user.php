<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;
$errors = [];

if (!empty($_GET['id'])) {
    $_id = $userModel->decode_id($_GET['id']);
    if ($_id !== NULL) {
        $user = $userModel->findUserById($_id);
    }
}

if (!empty($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $errors[] = 'Nhập tên vào bạn ơi.';
    } else {
        if (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
            $errors[] = 'Tên phải có độ dài từ 5-15 ký tự và chỉ chứa A-Z, a-z, 0-9';
        }
    }
    if (empty($_POST['password'])) {
        $errors[] = 'Mật khẩu là bắt buộc.';
    } else {
      
        if (strlen($_POST['password']) < 5 || strlen($_POST['password']) > 10) {
            $errors[] = 'Mật khẩu phải có độ dài từ 5-10 ký tự.';
        }
       
        if (!preg_match('/[a-z]/', $_POST['password'])) {
            $errors[] = 'Mật khẩu phải chứa ít nhất một chữ thường.';
        }
      
        if (!preg_match('/[A-Z]/', $_POST['password'])) {
            $errors[] = 'Mật khẩu phải chứa ít nhất một chữ hoa.';
        }
      
        if (!preg_match('/\d/', $_POST['password'])) {
            $errors[] = 'Mật khẩu phải chứa ít nhất một số.';
        }
      
        if (!preg_match('/[~!@#$%^&*()]/', $_POST['password'])) {
            $errors[] = 'Mật khẩu phải chứa ít nhất một ký tự đặc biệt.';
        }
    }

    if (empty($errors)) {
        if (!empty($_POST['id'])) {
            $_id = $userModel->decode_id($_POST['id']);
            $_POST['id'] = $_id;
        }
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
    }
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
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php foreach ($errors as $error) {
                        echo $error . '<br>';
                    } ?>
                </div>
            <?php } ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $userModel->encode_id($_id); ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>