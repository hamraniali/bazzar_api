<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        $_POST['name'] != '' && !empty($_POST['name']) &&
        $_POST['size'] != '' && !empty($_POST['size']) &&
        $_POST['teamName'] != '' && !empty($_POST['teamName']) &&
        $_POST['type'] != '' && !empty($_POST['type']) &&
        $_POST['imageSrc'] != '' && !empty($_POST['imageSrc']) &&
        $_POST['imagesSrc'] != '' && !empty($_POST['imagesSrc']) &&
        $_POST['downloadLink'] != '' && !empty($_POST['downloadLink']) &&
        $_POST['version'] != '' && !empty($_POST['version']) &&
        $_POST['news'] != '' && !empty($_POST['news']) &&
        $_POST['categoryId'] != '' && !empty($_POST['categoryId']) &&
        $_POST['description'] != '' && !empty($_POST['description']) &&
        $_POST['email'] != '' && !empty($_POST['email']) &&
        $_POST['mobile'] != '' && !empty($_POST['mobile'])
    ) {
        include_once '../connection.php';
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $size = mysqli_real_escape_string($conn, $_POST['size']);
        $teamName = mysqli_real_escape_string($conn, $_POST['teamName']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);
        $imageSrc = mysqli_real_escape_string($conn, $_POST['imageSrc']);
        $imagesSrc = mysqli_real_escape_string($conn, $_POST['imagesSrc']);
        $downloadLink = mysqli_real_escape_string($conn, $_POST['downloadLink']);
        $version = mysqli_real_escape_string($conn, $_POST['version']);
        $news = mysqli_real_escape_string($conn, $_POST['news']);
        $categoryId = mysqli_real_escape_string($conn, $_POST['categoryId']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);




        ///// Created And Updated //////





        $query = "INSERT INTO apps (name ,size ,teamName ,type ,imageSrc ,imagesSrc ,downloadLink ,version ,news ,categoryId ,description ,email ,mobile) VALUES ('$name' ,'$size' ,'$teamName' ,'$type' ,'$imageSrc' ,'$imagesSrc' ,'$downloadLink' ,'$version' ,'$news' ,'$categoryId' ,'$description' ,'$email' ,'$mobile')";
        $insert = mysqli_query($conn , $query);
        if ($insert) {
            echo json_encode(['message' => 'برنامه با موفقیت ثبت شد' , 'status' => 'success']);
        }
        else {
            echo json_encode(['message' => 'برنامه ثبت نشد' , 'status' => 'error']);
        }
        mysqli_close($conn);
    }
    else {
        echo json_encode(['message' => 'اطلاعات را کامل وارد کنید' , 'status' => 'error']);
    }
}
else {
    echo json_encode(['message' => 'BAD METHOD' , 'status' => 'error']);
}
