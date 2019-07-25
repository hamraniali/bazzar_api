<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        $_POST['userName'] != '' && !empty($_POST['userName']) &&
        $_POST['password'] != '' && !empty($_POST['password'])
    ) {
        include_once '../connection.php';

        $userName = mysqli_real_escape_string($conn , $_POST['userName']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);

        $query = "SELECT * FROM users WHERE userName='$userName' AND password='$password'";
        $checkUser = mysqli_query($conn , $query);
        if (mysqli_num_rows($checkUser) > 0) {
            $user = mysqli_fetch_assoc($checkUser);
            echo json_encode(['message' => 'وارد شدید' , 'status' => 'success' , 'accessToken' => $user['accessToken']]);
        }
        else {
            echo json_encode(['message' => 'نام کاربری یا رمز عبور اشتباه است' , 'status' => 'error']);
        }
    }
    else {
        echo json_encode(['message' => 'اطلاعات را کامل وارد کنید', 'status' => 'error']);
    }
}
else {
    echo json_encode(['message' => 'BAD METHOD', 'status' => 'error']);
}
