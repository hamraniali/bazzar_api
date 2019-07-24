<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['categoryId']) && $_POST['categoryId'] != null) {
        include_once '../connection.php';
        $categoryId = mysqli_real_escape_string($conn, $_POST['categoryId']);
        $checkExistQuery = 'SELECT * FROM categories WHERE id=' . $categoryId;
        $checkExist = mysqli_query($conn, $checkExistQuery);
        if (mysqli_num_rows($checkExist) == 1) {
            $query = 'DELETE FROM categories WHERE id=' . $categoryId;
            if (mysqli_query($conn, $query)) {
                echo json_encode(['message' => 'دسته بندی با موفقیت پاک شد', 'status' => 'success']);
            } else {
                echo json_encode(['message' => 'دسته بندی پاک نشد', 'status' => 'error']);
            }
        } else {
            echo json_encode(['message' => 'دسته بندی پیدا نشد', 'status' => 'error']);
        }
        mysqli_close($conn);
    } else {
        echo json_encode(['message' => 'دسته بندی پیدا نشد', 'status' => 'error']);
    }
} else {
    echo json_encode(['message' => 'BAD METHOD', 'status' => 'error']);
}
