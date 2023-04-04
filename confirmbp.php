<?php 
include("include/connect.php");
$piece=$_GET['piece'];
$ttprice=$_GET['ttprice'];
$book_id=$_GET['book_id'];
$sql2="SELECT * from product where book_id = $book_id";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($res2);

$stock = $row2['stock']-$piece;
if($stock<0){
    ?>

    <script language="javascript">
        alert("Book out of stock");
        window.location='showbook.php';
        </script>
        <?php
}else{
$sql="update product set stock='$stock' where book_id = $book_id";
if($res=mysqli_query($conn,$sql)){
    ?>

<script language="javascript">
    alert("Buy success");
    window.location='showbook.php';
    </script>
    <?php
}else{
    ?>

    <script language="javascript">
        alert("Buy success");
        window.location='showbook.php';
        </script>
        <?php

}
}
?>