<?php
    require "conn.php";
    $news_id=$_GET['news_id'];
    $sql = "DELETE FROM news WHERE news_id=$news_id";
    $result = $con->query($sql);
     if($result){
        header('Location:index.php');
    } else {
        echo 'Không xóa được';
    }
    $con->close();
