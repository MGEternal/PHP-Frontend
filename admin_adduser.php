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

</head>
<body>
<br>
    <br><br>
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
    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-4">
    <br>
    <h2>Add User</h2>
    <form action="admin_adduserp.php" method="post">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
    </div>
    <div class="form-group">
    <label for="fname">Name</label>
    <input type="text" class="form-control" name="rname" id="rname" placeholder="Enter Firstname" required>
    </div>
    
    <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="number" class="form-control" name="tel" id="tel" placeholder="Enter Telephone" required>
    </div>
    <div class="form-group">
    <label for="lname">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
    </div>
    <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex" value="female" checked>
          <label class="form-check-label" for="gridRadios1">
          Female
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sex" id="sex" value="male">
          <label class="form-check-label" for="gridRadios2">
          Male
          </label>
        </div>
        </div>
    </div>
  </fieldset>
  <div class="form-group">
    <label for="role">Role</label>
   <select class="form-control" name="role" id="role">
   <option value="user">User</option>
   <option value="admin">Admin</option>
   </select>
    </div>
    
    
    
    <button class="btn btn-primary  col-md-2" >OK</button>
    <button class="btn btn-danger  col-md-2" type="reset">cancel</button>
    </form>
    
    
    <br>
    <br>
    <br>
    <br>
    
    </div>

    <?php 
    //ท้าย
        require("include/footer2.php")
    ?>
</body>
</html>