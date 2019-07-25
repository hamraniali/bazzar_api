<?php

include_once '../connection.php';
$query = 'SELECT * FROM categories';
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo json_encode(mysqli_fetch_all($result));
} else {
    echo json_encode(['message' => 'دسته بندی یافت نشد', 'status' => 'error']);
}
