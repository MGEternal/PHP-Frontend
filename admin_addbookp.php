<?php
include("include/connect.php");
$book_name=$_POST['book_name'];
$type=$_POST['type'];
$detail=$_POST['detail'];

$price=$_POST['price'];
$stock=$_POST['stock'];
$book_img=$_POST['book_img'];


$sql2="SELECT * FROM user";
$res2=mysqli_query($conn , $sql2);
while($row2=mysqli_fetch_assoc($res2)){
    if ($row2['book_name']==$book_name) {
        $i++;
        ?>
    <script language="javascript">
    alert("This book name used");
    window.location='admin_adduser.php';
    </script>

<?php
    }
}

if($i==0){
$sql="INSERT INTO product values('','$book_name','$type','$detail','$price','$stock','$book_img')";
echo $sql;
if($res=mysqli_query($conn,$sql)){
    ?>
<script language="javascript">
alert("Add new book succese");
window.location='admin_showbook.php';
</script>

    <?php

}else{
    ?>
    <script language="javascript">
    alert("Add new book not succese");
   window.location='admin_addbook.php';
    </script>
<?php
}
}

?>







