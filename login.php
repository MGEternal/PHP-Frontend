<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MG Shop</title>
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
</head>

<body>
<br><br><br><br>
<?php 
         session_start();
         if ($_SESSION['role']=='user') {
             include("include/menu_user2.php");
         }elseif ($_SESSION['role']=='admin'){
             include("include/menu_admin2.php");
         }else{
             include("include/menu2.php");
         }
        
        ?>
    <!-- เนื้อหา -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container col-md-4">
    <br>
    <h2>LOGIN</h2>
    <form action="chklogin.php" method="post">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" placeholder="Enter username" class="form-control">
    </div>
    <div class="form-group">
    <label for="password">password</label>
    <input type="password" name="password" id="password" placeholder="Enter password" class="form-control">
    </div>
    <button class="btn btn-primary">Login</button>
    <a href="register.php"><button type="button" class="btn btn-primary">Register</button></a>
    <a href="fgpwd.php"><button type="button" class="btn btn-primary">Forgot password</button></a>
    
    </div>
    </form>




         <br><br><br><br>
         <br><br><br><br><br><br><br><br>



    <?php 
    //ท้าย
        require("include/footer2.php")
    ?>
</body>
</html>