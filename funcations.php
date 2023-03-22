<?php
include('connection.php');

function post_display($conn,$offset,$limit){
    $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $offset,$limit";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function services_display($conn,$offset,$limit){
    $sql = "SELECT * FROM services ORDER BY id DESC LIMIT $offset,$limit";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>