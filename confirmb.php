<?php 
$book_id=$_POST['book_id'];
$piece=$_POST['piece'];
echo $book_id,$piece;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/icon.css">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="js/alljs.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="css/family.css" rel="stylesheet" type="text/css" />
        <link href="css/family2.css" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
         <!-- Bootstrap core JS-->
         <script src="js/jquery.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <!-- Third party plugin JS-->
         <script src="js/jquery.easing.min.js"></script>
         <!-- Contact form JS-->
         <script src="assets/mail/jqBootstrapValidation.js"></script>
         <script src="assets/mail/contact_me.js"></script>
         <!-- Core theme JS-->
         <script src="js/scripts.js"></script>
    <title>MG Shop</title>
    <script language="javascript">
        function del(mypage){
            var agree=confirm("Are you sure?");
        if (agree){
            
            window.location=mypage;
        }

        }

        </script>
</head>
<body>
<br>
    <br><br>
    <br><br><br>
    <br>
    <?php 
    //หัว
    session_start();
    if ($_SESSION['role']=='user') {
        require("include/menu_user2.php");
    }elseif ($_SESSION['role']=='admin'){
        require("include/menu_admin2.php");
    }else{
        require("include/menu2.php");
    }
    require("include/connect.php");
        $sql = "SELECT * FROM `product` where book_id='$book_id' ";
        $res = mysqli_query($conn,$sql);
        
        
    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-10">
    <br>
    <h2>Order</h2><br>
        <table class="table table-responsive-md">
            <thead>
                
                <th>Bookname</th>
                
                
                
                <th>Total Price</th>
                <th>Total Piece</th>
                <th>Book Img</th>
                
               
                

            </thead>
            <?php $row=mysqli_fetch_assoc($res);
                $ttprice=$row['price']*$piece;
                ?>
            <tbody>
                
                <td><?php echo $row['book_name']?></td>
                
                <td><?php echo '￥'.$ttprice?></td>
                <td><?php echo $piece?></td>
                <td> <img src="img/<?php echo $row[book_img] ?>" width="100" hieght="100" alt=""  >   </td>
                
            </tbody>
                
                
        </table>
        <a href="confirmbp.php?ttprice=<?php echo $ttprice?>&piece=<?php echo $piece?>&book_id=<?php echo $book_id?>" ><button class="btn btn-primary float-right" >OK</button></a>
        <br><br><br><br><br>
    
    
    
    </div>

    <?php 
    //ท้าย
        require("include/footer2.php")
    ?>
</body>
</html>