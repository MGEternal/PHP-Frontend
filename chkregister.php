<?php
include("include/connect.php");

$username=$_POST['username'];
$password=$_POST['password'];
$rname=$_POST['rname'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$sex=$_POST['sex'];




$sql2="SELECT * FROM user";
$res2=mysqli_query($conn , $sql2);
while($row2=mysqli_fetch_assoc($res2)){
    if ($row2['username']==$username) {
        $i++;
        ?>
    <script language="javascript">
    alert("This username used");
    window.location='register.php';
    </script>
<?php
    }if ($row2['name']==$rname ) {
        $i++;
        ?>
    <script language="javascript">
    alert("This name used");
    window.location='register.php';
    </script>
<?php
    }if ($row2['tel']==$tel) {
        $i++;
        ?>
    <script language="javascript">
    alert("This telephone number used");
    window.location='register.php';
    </script>
    <?php
    }if ($row2['email']==$email) {
        $i++;
        ?>
    <script language="javascript">
    alert("This email used");
    window.location='register.php';
    </script>
<?php
    }if ($username=='') {
        $i++;
        ?>
    <script language="javascript">
    alert("กรุณากรอก Username");
    window.location='register.php';
    </script>
<?php
    }
}


$sql="INSERT INTO user values('','$username','$password','$rname','$tel','$email','$sex','user')";

if($res=mysqli_query($conn , $sql)){

 
 ?>
<script language="javascript">
alert("Register Success");
window.location='login.php';
</script>

    <?php

}else{
   
    ?>
    <script language="javascript">
    alert("Register Not Success");
    window.location='register.php';
    
    </script>
<?php
}


?>







