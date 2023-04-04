<?php
    require("include/connect.php");
    $user_id=$_GET['user_id'];
    $sql="delete from user where user_id ='".$user_id."'";
    $res =mysqli_query($conn,$sql);

    header("location: admin_showuser.php");
?>