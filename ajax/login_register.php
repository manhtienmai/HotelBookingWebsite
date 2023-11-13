<?php
require_once('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');

// Login
if (isset($_POST['login'])) {
    $data = filteration($_POST);
    
    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1",
    [$data['email_mob'], $data['email_mob']], "ss");

    if (mysqli_num_rows($u_exist) == 0) {
        echo 'inv_email_mob';
        exit;
    } else {
        $u_fetch = mysqli_fetch_assoc($u_exist);
        if ($u_fetch['is_verified'] == 0) {
            echo 'not_verified';
            exit;
        } else if ($u_fetch['status'] == 0) {
            echo 'inactive';
            exit;
        } else {

            if ($data['pass'] !== $u_fetch['password']) {
              error_log('Password verification failed for user: ' . $data['email_mob']);
              echo 'invalid_pass';
              exit; 
            } else {
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['uId'] = $u_fetch['id'];
                $_SESSION['uName'] = $u_fetch['name'];
                $_SESSION['uPic'] = $u_fetch['profile'];
                $_SESSION['uPhone'] = $u_fetch['phonenum'];
                echo "login_success";
                exit;
            }
        }
    }
}

// Registration
if (isset($_POST['register'])) {
    $data = filteration($_POST);

    if ($data['pass'] != $data['cpass']) {
        echo 'pass_mismatch';
        exit;
    }

    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1",
    [$data['email'], $data['phonenum']], "ss");

    if (mysqli_num_rows($u_exist) > 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
        exit;
    }

    $img = uploadUserImage($_FILES['profile']);

    if ($img == 'inv_img') {
        echo 'inv_img';
        exit;
    } else if ($img == 'upd_failed') {
        echo 'upd_failed';
        exit;
    }

    $hashed_password = password_hash($data['pass'], PASSWORD_DEFAULT);
    $default_picture = 'C:\xampp\htdocs\HotelBookingWebsite\images\users\IMG_91004.jpeg';
    $res = insert("INSERT INTO `user_cred`(`name`, `email`, `phonenum`, `password`, `profile`) VALUES (?, ?, ?, ?, ?)", 
    [$data['name'], $data['email'], $data['phonenum'], $hashed_password, $img], "sssss");

    if ($res > 0) {
        echo 'reg_success';
        exit;
    } else {
        echo 'reg_failed';
        exit;
    }
}

// If we reach this point, it means that neither 'login' nor 'register' POST variables were set
exit('No action to perform.');
?>
