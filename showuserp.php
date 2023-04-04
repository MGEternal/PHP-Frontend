<?php
require("include/connect.php");
$user_id=$_POST['user_id'];
$username=$_POST['username'];
$password=$_POST['password'];
$rname=$_POST['rname'];

$tel=$_POST['tel'];
$email=$_POST['email'];
$sex=$_POST['sex'];




    $res2=mysqli_query($conn,$sql2);
        if($mem_img!=""){
 
    $sql="UPDATE `user` SET user_name='$username',password='$password',name='$rname',telephone= '$tel',email= '$email',sex= '$sex',role= 'user' WHERE user_id='$user_id'";
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("Edit success");
    window.location='showuser.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("Edit not success");
    window.location='showuser.php';
    </script>
    <?php } 
        }else{
            $sql="UPDATE `user` SET  user_name='$username',password='$password',name='$rname',telephone= '$tel',email= '$email',sex= '$sex',role= 'user' WHERE user_id='$user_id'";
            echo $sql ;
    if($res=mysqli_query($conn,$sql)){
    ?>
    <script language="javascript">
    alert("Edit success");
    window.location='showuser.php';
    </script>
            
<?php
    }else{
    ?>
    <script language="javascript">
    alert("Edit not success");
    window.location='showuser.php';
    </script>
    <?php } 
        }
 ?>
   
    
