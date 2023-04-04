<?php
include("include/connect.php");
$username=$_POST['username'];
$password=$_POST['password'];
$rname=$_POST['rname'];

$tel=$_POST['tel'];
$email=$_POST['email'];
$sex=$_POST['sex'];
$role=$_POST['role'];

$sql2="SELECT * FROM user";
$res2=mysqli_query($conn , $sql2);
while($row2=mysqli_fetch_assoc($res2)){
    if ($row2['user_name']==$username) {
        $i++;
        ?>
    <script language="javascript">
    alert("This username used");
    window.location='admin_adduser.php';
    </script>
<?php
    }if ($row2['name']==$rname) {
        $i++;
        ?>
    <script language="javascript">
    alert("This name used");
    window.location='admin_adduser.php';
    </script>
<?php
    }if ($row2['telephone']==$tel) {
        $i++;
        ?>
    <script language="javascript">
    alert("This telephone used");
    window.location='admin_adduser.php';
    </script>
<?php
    }if ($row2['email']==$email) {
        $i++;
        ?>
    <script language="javascript">
    alert("This email used");
    window.location='admin_adduser.php';
    </script>
<?php
    }
}

if($i==0){
$sql="INSERT INTO user values('','$username','$password','$rname','$tel','$email','$sex','$role')";
echo $sql;
if($res=mysqli_query($conn,$sql)){
    ?>
<script language="javascript">
alert("เพิ่มข้อมูลสำเร็จ");
window.location='admin_showuser.php';
</script>

    <?php

}else{
    ?>
    <script language="javascript">
    alert("เพิ่มข้อมูลไม่สำเร็จ");
    window.location='admin_adduser.php';
    </script>
<?php
}
}

?>







