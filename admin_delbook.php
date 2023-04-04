<?php
    require("include/connect.php");
    $book_id=$_GET['book_id'];
    $sql="delete from product where book_id ='".$book_id."'";
    $res =mysqli_query($conn,$sql);

    header("location: admin_showbook.php");
?>