<?php
require_once('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');

function handleLogin() {
    $data = filteration($_POST);

    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1",
    [$data['email_mob'], $data['email_mob']], "ss");

    if (mysqli_num_rows($u_exist) == 0) {
        return 'inv_email_mob';
    }

    $u_fetch = mysqli_fetch_assoc($u_exist);

    if ($u_fetch['is_verified'] == 0) {
        return 'not_verified';
    } else if ($u_fetch['status'] == 0) {
        return 'inactive';
    } else if ($data['pass'] !== $u_fetch['password']) {
        error_log('Password verification failed for user: ' . $data['email_mob']);
        return 'invalid_pass';
    } else {
        session_start();
        $_SESSION = ['login' => true, 'uId' => $u_fetch['id'], 'uName' => $u_fetch['name'], 'uPic' => $u_fetch['profile'], 'uPhone' => $u_fetch['phonenum']];
        return "login_success";
    }
}

function handleRegistration() {
    $data = filteration($_POST);

    if ($data['pass'] != $data['cpass']) {
        return 'pass_mismatch';
    }

    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1",
    [$data['email'], $data['phonenum']], "ss");

    if (mysqli_num_rows($u_exist) > 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        return ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
    }

    $img = uploadUserImage($_FILES['profile']);
    if (in_array($img, ['inv_img', 'upd_failed'])) {
        return $img;
    }

    $hashed_password = password_hash($data['pass'], PASSWORD_DEFAULT);
    $verified_status = 1; // automatically verified

    $res = insert("INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `dob`, `password`, `profile`, `is_verified`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", 
    [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['dob'], $hashed_password, $img, $verified_status], "sssisssi");

    return $res > 0 ? 'reg_success' : 'reg_failed';
}

$actionResult = '';

if (isset($_POST['login'])) {
    $actionResult = handleLogin();
} elseif (isset($_POST['register'])) {
    $actionResult = handleRegistration();
} else {
    $actionResult = 'No action to perform.';
}

exit($actionResult);
?>
