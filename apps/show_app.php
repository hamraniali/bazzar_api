<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['appId']) && $_GET['appId'] != null) {
        include_once '../connection.php';
        $appId = mysqli_real_escape_string($conn , $_GET['appId']);
        $query = 'SELECT * FROM apps WHERE id='.$appId;
        $result = mysqli_query($conn,$query);

        if (mysqli_num_rows($result) == 1) {
            $app = mysqli_fetch_assoc($result);
            echo json_encode([
                'id' => $app['id'],
                'name' => $app['name'],
                'size' => $app['size'],
                'rate' => $app['rate'],
                'teamName' => $app['teamName'],
                'type' => $app['type'],
                'downloadCount' => $app['downloadCount'],
                'commentCount' => $app['commentCount'],
                'imageSrc' => $app['imageSrc'],
                'imagesSrc' => $app['imagesSrc'],
                'downloadLink' => $app['downloadCount'],
                'version' => $app['version'],
                'news' => $app['news'],
                'categoryId' => $app['categoryId'],
                'created' => $app['created'],
                'updated' => $app['updated'],
                'description' => $app['description'],
                'email' => $app['email'],
                'mobile' => $app['mobile'],
            ]);
        }
        else {
            echo json_encode(['message' => 'برنامه پیدا نشد' , 'status' => 'error']);
        }
        mysqli_close($conn);
    }
    else {
        echo json_encode(['message' => 'برنامه پیدا نشد' , 'status' => 'error']);
    }
}
else {
    echo json_encode(['message' => 'BAD METHOD' , 'status' => 'error']);
}

