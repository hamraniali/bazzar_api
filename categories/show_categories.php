<?php

include_once '../connection.php';
$query = 'SELECT * FROM categories';
$result = mysqli_query($conn , $query);
if (mysqli_num_rows($result) > 0) {
    while ($category = mysqli_fetch_assoc($result)) {
        echo json_encode([
            'id' => $category['id'],
            'title' => $category['title'],
            'imageSrc' => $category['imageSrc']
        ]);
    }
}
else {
    echo json_encode(['message' => 'دسته بندی یافت نشد' , 'status' => 'error']);
}


//// problem in return category values /////
