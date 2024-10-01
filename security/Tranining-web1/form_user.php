<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;
$error = "";

if (!empty($_GET['id'])) {
    $_id = $_GET['id'];
    $user = $userModel->findUserById($_id); // Update existing user
}

if (!empty($_POST['submit'])) {
    // Kiểm tra và validate dữ liệu

    // Khởi tạo biến để lưu thông báo lỗi
    $errors = [];

    // Validate thông tin name
    $name = trim($_POST['name']);
    if (empty($name)) {
        $errors[] = "Thông tin name là bắt buộc nhập.";
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $name)) {
        $errors[] = "Thông tin name phải chứa từ 5 đến 15 ký tự hợp lệ (A-Z, a-z, 0-9).";
    }

    // Validate thông tin password
    $password = trim($_POST['password']);
    if (empty($password)) {
        $errors[] = "Thông tin password là bắt buộc nhập.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $password)) {
        $errors[] = "Thông tin password phải từ 5 đến 10 ký tự và bao gồm chữ thường, chữ HOA, số và ký tự đặc biệt.";
    }

    // Kiểm tra xem tên đã tồn tại hay chưa
    $nameExists = $userModel->isNameExist($name, $_id);
    if ($nameExists) {
        $errors[] = "Tên người dùng đã tồn tại, vui lòng chọn tên khác.";
    }

    // Nếu không có lỗi thì thực hiện cập nhật hoặc thêm mới người dùng
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    } else {
        // Nếu có lỗi, hiển thị thông báo lỗi
        $error = implode("<br>", $errors);
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

        <?php if (!empty($error)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo htmlspecialchars($user[0]['name']); ?>'>
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
