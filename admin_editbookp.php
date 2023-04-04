<?php
include("include/connect.php");
$book_id=$_POST['book_id'];
$book_name=$_POST['book_name'];
$type=$_POST['type'];
$detail=$_POST['detail'];

$price=$_POST['price'];
$stock=$_POST['stock'];
$book_img=$_POST['book_img'];

$book_img2=$_POST['book_img2'];
if($book_img==''){
    $book_img=$book_img2;
}


    



$sql="update product set book_name='$book_name',type='$type',detail='$detail',price='$price',stock='$stock',book_img='$book_img' where book_id ='$book_id'";
echo $sql;

if($res=mysqli_query($conn,$sql)){
    ?>
<script language="javascript">
alert("Edit succese");
window.location='admin_showbook.php';
</script>

    <?php

}else{
    ?>
    <script language="javascript">
    alert("Edit not succese");
    window.location='admin_editbook.php?book_id=<?php echo $book_id ?>';
    </script>
<?php

}

?>







