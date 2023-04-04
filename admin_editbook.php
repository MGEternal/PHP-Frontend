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
    require("include/connect.php");
    $book_id = $_GET['book_id'];
    $sql = "select * from `product` where book_id= '".$book_id."' ";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res)
    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-4">
    <br><br><br><br>
    <h2>Edit Book</h2>
    <form action="admin_editbookp.php" method="post">
    <div class="form-group">
    <label for="book_name">Book Name</label>
    <input type="hidden" class="form-control" name="book_id" id="book_id" value="<?php echo $row['book_id']?>">
    <input type="text" class="form-control" name="book_name" id="book_name"   value="<?php echo $row['book_name'] ?>">
    </div>
    <div class="form-group">
    <label for="type">Type</label>
   <select class="form-control" name="type" id="type">
   <option value="entertainment" <?php if($row['type']=="entertainment") echo "selected" ?>>Entertainment</option>
   <option value="documentary" <?php if($row['type']=="documentary") echo "selected" ?>>Documentary</option>
   <option value="horror" <?php if($row['type']=="horror") echo "selected" ?>>Horror</option>
   <option value="novel" <?php if($row['type']=="novel") echo "selected" ?>>Novel</option>
   <option value="knowledge" <?php if($row['type']=="knowledge") echo "selected" ?>>Knowledge</option>
   <option value="history" <?php if($row['type']=="history") echo "selected" ?>>History</option>
   </select>
    </div>
    <div class="form-group">
    <label for="detail">Details </label>
    <textarea class="form-control" id="detail" name="detail" rows="3"><?php echo $row['detail'] ?></textarea>
  </div>
  <input type="hidden" class="form-control" name="book_img2" id="book_img2" value="<?php echo $row['book_img']?>">
    <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price" id="price"  value="<?php echo $row['price'] ?>"  >
    </div>
    <div class="form-group">
    <label for="stock">Piece</label>
    <input type="number" class="form-control" name="stock" id="stock" value="<?php echo $row['stock'] ?>" >
    </div>
    <div class="form-group">
    <label for="book_img">Image</label>
    <center><img src="img/<?php echo $row['book_img']?>" alt="" width="200" heigth="200" ></center>
    
    <input type="file" class="form-control-file" name="book_img" id="book_img" value="<?php echo $row['book_img']?>">
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