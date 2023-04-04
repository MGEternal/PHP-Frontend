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
        $sql = "SELECT * FROM `product` ";
        $res = mysqli_query($conn,$sql);
        

    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-10">
    <br>
    <h2>Book <a href="admin_addbook.php"><button class="btn btn-primary">Add Book</button></a></h2><br>
        <table class="table table-responsive-md">
            <thead>
                <th>No.</th>
                <th>Bookname</th>
                <th>Type</th>
                <th>Detail</th>
                
                <th>Price</th>
                <th>Piece</th>
                <th>Book Img</th>
                
                
                <th>Edit</th>
                <th>Delete</th>

            </thead>
            <?php while($row=mysqli_fetch_assoc($res)){?>
            <tbody>
                <td><?php echo ++$i?></td>
                <td><?php echo $row['book_name']?></td>
                <td><?php echo $row['type']?></td>
                <td><?php echo $row['detail']?></td>
                <td><?php echo $row['price']?></td>
                <td><?php echo $row['stock']?></td>
                <td> <img src="img/<?php echo $row[book_img] ?>" width="100" hieght="100" alt=""  >   </td>
                <td><a href="admin_editbook.php?book_id=<?php echo $row['book_id']?>" > <button class="btn btn-primary">Edit</button></a></td>
                <td><a href="admin_delbook.php?book_id=<?php echo $row['book_id']?>" onclick="del(this.href) ; return false;"> <button class="btn btn-danger">Delete</button></a></td>
            </tbody>
            <?php } ?>
                
        </table>
        <br><br><br><br><br>
    
    
    
    </div>

    <?php 
    //ท้าย
        require("include/footer2.php")
    ?>
</body>
</html>