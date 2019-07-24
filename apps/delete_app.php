<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['appId']) && $_POST['appId'] != null) {
        include_once '../connection.php';
        $appId = mysqli_real_escape_string($conn ,$_POST['appId']);
        $checkExistQuery = 'SELECT * FROM apps WHERE id='.$appId;
        $checkExist = mysqli_query($conn , $checkExistQuery);
        if (mysqli_num_rows($checkExist) == 1){
            $query = 'DELETE FROM apps WHERE id='.$appId;
            if (mysqli_query($conn , $query)){
                echo json_encode(['message' => 'برنامه با موفقیت پاک شد' , 'status' => 'success']);
            }
            else {
                echo json_encode(['message' => 'برنامه پاک نشد' , 'status' => 'error']);
            }
        }
        else {
            echo json_encode(['message' => 'برنامه پیدا نشد' , 'status' => 'error']);
        }
        mysqli_close($conn);
    }
    else{
        echo json_encode(['message' => 'برنامه پیدا نشد' , 'status' => 'error']);
    }
}
else {
    echo json_encode(['message' => 'BAD METHOD' , 'status' => 'error']);
}
