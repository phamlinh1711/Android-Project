<?php
    require "conn.php";
    $news_id=$_GET['news_id'];
    $eNews_title = $_POST['news_title'];
    $eNews_status = $_POST['news_status'];
    $sql = "UPDATE news SET news_title='$eNews_title', news_status='$eNews_status' WHERE news_id=$news_id";
    $result = $con->query($sql);
    if($result){
        header('Location:index.php');
    } else {
        echo 'Đã có lỗi';
    }
    $con->close();


