<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require "conn.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sửa thông tin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudFlare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php
             $news_id=$_GET['news_id'];
                echo "<form action='edit.php?news_id=".$news_id."' method='post'>";
                    
                     $sql = "SELECT * FROM news WHERE news_id=$news_id ";
                     $result = $con->query($sql)->fetch_assoc();
                     echo "Title: <input type='text' name='news_title' class='form-control' placeholder='".$result["news_title"]."'required>";
                     echo "</br></br>Status: <input type='text' name='news_status' class='form-control' placeholder='".$result["news_status"]."'required>";
                     ?></br></br>
              <input type="submit" class="btn btn-block btn-danger text-uppercase font-weight-bold" value="Sửa">
            </form>
        </div>
       
    </body>
</html>
