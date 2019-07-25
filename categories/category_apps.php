<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_GET['categoryId'] != '' && !empty($_GET['categoryId'])) {
        include_once '../connection.php';
        $categoryId = mysqli_real_escape_string($conn, $_GET['categoryId']);
        $query = 'SELECT id,imageSrc,name FROM apps WHERE categoryId=' . $categoryId;
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {

            echo json_encode(mysqli_fetch_all($result));

        } else {
            echo json_encode(['message' => 'اپ یافت نشد', 'status' => 'error']);
        }
    } else {
        echo json_encode(['message' => 'اپ یافت نشد', 'status' => 'error']);
    }
} else {
    echo json_encode(['message' => 'BAD METHOD', 'status' => 'error']);
}


