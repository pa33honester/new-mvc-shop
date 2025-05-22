<?php

require_once('admin/models/users.php');
if (isset($_POST['id_change'])) {
    global $userNav;
    $loginUser = getRecord('users', $userNav);
    if ($_POST['id_change'] != $userNav && $loginUser['role_id'] == 0) {
        header('location:index.php');
    }
    $id = intval($_POST['id_change']);
    $newpassword = md5($_POST['newPassword']);
    $currentpassword = md5($_POST['currentPassword']);
    $confirmPassword = md5($_POST['confirmPassword']);
}
if ($newpassword == $currentpassword) {
    echo "<div style='padding-top: 200px' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> The password change has a problem. Your new password is not allowed to be like the current password !! <br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='admin.php'>Đến Dashboard</a></div></div>";
} elseif (strlen($_POST['newPassword']) < 8) {
    echo "<div style='padding-top: 200px' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> The change of password failed. The password you import must be 8 characters long or more !!<br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='index.php'>Đến Trang chủ</a></div></div>";
} elseif ($newpassword == $confirmPassword) {
    echo changePassword($id, $newpassword, $currentpassword);
} else {
    echo "<div style='padding-top: 200px' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> The password change has a problem. Input cell verification of the password is not in accordance with the new password you enter !!<br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='admin.php'>Đến Dashboard</a></div></div>";
}
require('admin/views/user/result.php');
<?php

require_once('admin/models/users.php');
if (isset($_POST['id_change'])) {
    global $userNav;
    $loginUser = getRecord('users', $userNav);
    if ($_POST['id_change'] != $userNav && $loginUser['role_id'] == 0) {
        header('location:index.php');
    }
    $id = intval($_POST['id_change']);
    $newpassword = md5($_POST['newPassword']);
    $currentpassword = md5($_POST['currentPassword']);
    $confirmPassword = md5($_POST['confirmPassword']);
}
if ($newpassword == $currentpassword) {
    echo "<div style='padding-top: 200px' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> The password change has a problem. Your new password is not allowed to be like the current password !! <br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='admin.php'>Đến Dashboard</a></div></div>";
} elseif (strlen($_POST['newPassword']) < 8) {
    echo "<div style='padding-top: 200px' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> The change of password failed. The password you import must be 8 characters long or more !!<br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='index.php'>Đến Trang chủ</a></div></div>";
} elseif ($newpassword == $confirmPassword) {
    echo changePassword($id, $newpassword, $currentpassword);
} else {
    echo "<div style='padding-top: 200px' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> The password change has a problem. Input cell verification of the password is not in accordance with the new password you enter !!<br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='admin.php'>Đến Dashboard</a></div></div>";
}
require('admin/views/user/result.php');
<?php

require_once('admin/models/users.php');
if (isset($_POST['id_change'])) {
    global $userNav;
    $loginUser = getRecord('users', $userNav);
    if ($_POST['id_change'] != $userNav && $loginUser['role_id'] == 0) {
        header('location:index.php');
    }
    $id = intval($_POST['id_change']);
    $newpassword = md5($_POST['newPassword']);
    $currentpassword = md5($_POST['currentPassword']);
    $confirmPassword = md5($_POST['confirmPassword']);
}
if ($newpassword == $currentpassword) {
    echo "<div style='padding-top: 200px' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> The password change has a problem. Your new password is not allowed to breed the current password!! <br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='admin.php'>Đến Dashboard</a></div></div>";
} elseif (strlen($_POST['newPassword']) < 8) {
    echo "<div style='padding-top: 200px' class='container'><div style='text-align: center;' class='alert alert-danger'><strong>NO!</strong> The change of password failed. The password you import must be 8 characters long or more !! <br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='index.php'>Đến Trang chủ</a></div></div>";
} elseif ($newpassword == $confirmPassword) {
    echo changePassword($id, $newpassword, $currentpassword);
} else {
    echo "<div style='padding-top: 200px' class='container'><div class='alert alert-danger' style='text-align: center;'><strong>NO!</strong> The password change has a problem. Input cell verification of the password is not in accordance with the new password you enter !! <br><a href='javascript: history.go(-1)'>Trở lại</a> hoặc <a href='admin.php'>Đến Dashboard</a></div></div>";
}
require('admin/views/user/result.php');
