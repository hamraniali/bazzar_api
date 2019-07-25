<?php

include '../connection.php';

//// Queries ////
$mainQuery = "SELECT id,name,teamName,imageSrc FROM apps ";
$bestGamesQuery = $mainQuery . "WHERE type='game' ORDER BY downloadCount DESC LIMIT 17";
$bestSoftQuery = $mainQuery . "WHERE type='soft' ORDER BY downloadCount DESC LIMIT 17";
$newestAppQuery = $mainQuery . "ORDER BY created DESC LIMIT 17";
$overwhelmingAppsQuery = $mainQuery . "ORDER BY commentCount DESC LIMIT 17";
$lastUpdatesQuery = $mainQuery . "ORDER BY updated DESC LIMIT 17";

//// Get Data ////
$bestGames = mysqli_query($conn,$bestGamesQuery);
$bestSoft = mysqli_query($conn,$bestSoftQuery);
$newestApp = mysqli_query($conn,$newestAppQuery);
$overwhelmingApps = mysqli_query($conn,$overwhelmingAppsQuery);
$lastUpdates = mysqli_query($conn,$lastUpdatesQuery);

echo json_encode([
    'bestGames' => mysqli_fetch_all($bestGames),
    'bestSoft' => mysqli_fetch_all($bestSoft),
    'newestApp' => mysqli_fetch_all($newestApp),
    'overwhelmingApps' => mysqli_fetch_all($overwhelmingApps),
    'lastUpdates' => mysqli_fetch_all($lastUpdates),
]);












////while ($bestGame = mysqli_fetch_assoc($bestGames)) {
////    echo json_encode([
////        'id' => $bestGame['id'],
////        'name' => $bestGame['name'],
////        'imageSrc' => $bestGame['imageSrc'],
////        'teamName' => $bestGame['teamName'],
////]);
////}