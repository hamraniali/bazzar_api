<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_GET['categoryId'] != '' || !empty($_GET['categoryId'])) {
        include_once '../connection.php';
        $categoryId = mysqli_real_escape_string($conn , $_GET['categoryId']);
        $query = 'SELECT id,imageSrc,name FROM apps WHERE categoryId='.$categoryId;
        $result = mysqli_query($conn , $query);
        if (mysqli_num_rows($result) > 0) {
            while ($app = mysqli_fetch_assoc($result)) {
                echo json_encode([
                    'id' => $app['id'],
                    'name' => $app['name'],
                    'imageSrc' => $app['imageSrc']
                ]);
            }
        }
        else {
            echo json_encode(['message' => 'اپ یافت نشد' , 'status' => 'error']);
        }
    }
    else {
        echo json_encode(['message' => 'اپ یافت نشد' , 'status' => 'error']);
    }
}
else {
    echo json_encode(['message' => 'BAD METHOD' , 'status' => 'error']);
}


