<?php
    require "conn.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NEWS</title>
        <style type="text/css">
            #header{
                display: inline;
                width: 100%;
                background: white;
            }
            #line1{
                color: #0000FF;
                float: left;
                text-align: center;
            }
            #line2{
                float: right;
                text-align: center;
            }
            #t1{
                border:1px solid black; background-color:yellow; position:fixed; top:50px; width: 780px; margin: 0 auto;
            }
    </style>
    </head>
    <body>
        <div id='header'>
            <h3 id ='line1'><a href="them.php?news_id=<?php echo $rows['news_id'];?>">+NEW POST</a></h3>
            <h3 id ='line2'>LOG OUT</h3>
        </div>
        <table id="t1" border="1" align="center">
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Action</th>
            </tr> 
             <?php
                $sql= "SELECT * From news";
                $qr = mysqli_query($con, $sql);
	
                while ($rows = mysqli_fetch_array($qr)) {
            ?>
            <tr>
                <td><?php echo $rows["news_title"]?></td>
                <td><?php echo $rows["news_status"]?></td>
                <td><a href="sua.php?news_id=<?php echo $rows['news_id'];?>">Sửa</a> |<a href="xoa.php?news_id=<?php echo $rows['news_id'];?>">Xóa</a></td>
            </tr>
            <?php }?>
        </table>
    </body>
   
</html>
