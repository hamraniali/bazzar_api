<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        $_POST['userName'] != '' && !empty($_POST['userName']) &&
        $_POST['email'] != '' && !empty($_POST['email']) &&
        $_POST['mobile'] != '' && !empty($_POST['mobile']) &&
        $_POST['password'] != '' && !empty($_POST['password'])
    ) {
        include_once '../connection.php';
        include '../jdf.php';
        $userName = mysqli_real_escape_string($conn, $_POST['userName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $loginDate = date('Y/m/d');
        $accessToken = openssl_random_pseudo_bytes(100);
        $accessToken = bin2hex($accessToken);
        $checkExistUserQuery = "SELECT userName,email FROM users WHERE email='$email' OR userName='$userName'";
        $checkExistUser = mysqli_query($conn, $checkExistUserQuery);
        if (mysqli_num_rows($checkExistUser) > 0) {
            echo json_encode(['message' => 'این کاربر وجود دارد', 'status' => 'error']);
        }
        else {
            $checkTokenQuery = "SELECT accessToken FROM users WHERE accessToken='$accessToken'";
            $checkToken = mysqli_query($conn , $checkTokenQuery);
            if (mysqli_num_rows($checkToken) > 0) {
                echo json_encode(['message' => 'خطایی رخ داده است دوباره تلاش کنید ' , 'status' => 'error']);
            }
            else{
                $query = "INSERT INTO users (userName, email, mobile, password, loginDate ,accessToken) VALUES ('$userName', '$email', '$mobile', '$password', '$loginDate','$accessToken')";
                $insert = mysqli_query($conn, $query);
                if ($insert) {
                    echo json_encode(['message' => 'ثبت نام با موفقیت انجام شد', 'status' => 'success' , 'accessToken' => $accessToken]);
                } else {
                    echo json_encode(['message' => 'خطا در ثبت اطلاعات', 'status' => 'error']);
                }
            }
        }
        mysqli_close($conn);
    } else {
        echo json_encode(['message' => 'اطلاعات را کامل وارد کنید', 'status' => 'error']);
    }
} else {
    echo json_encode(['message' => 'BAD METHOD', 'status' => 'error']);
}