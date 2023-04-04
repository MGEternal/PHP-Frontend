
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
    
    <br><br><br><br>
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
        $search=$_GET['search'];
        $type=$_GET['type'];
        if($search=='' && $type==''){
        $sql = "SELECT * FROM `product` ";
        $res = mysqli_query($conn,$sql);
    }else if($search!=''){
        $sql = "SELECT * FROM `product` where book_name = '$search' ";
        $res = mysqli_query($conn,$sql);
    }else{
        $sql = "SELECT * FROM `product` where book_name = '$type' ";
        $res = mysqli_query($conn,$sql);
    }

    ?>
    <!-- เนื้อหา -->
    <div class="container col-md-10">
   
        
                   <!-- Portfolio Section-->
                   <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Book </h2>
        
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <form class="form-inline my-2 my-lg-0">
                    <div class="form-group" align = 'center'>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <div class="form-group">
                  <label for="type">Type</label>
                  <select class="form-control" name="type" id="type">
              <option value="">Select</option>
   <option value="entertainment" <?php if($row['type']=="entertainment") echo "selected" ?>>Entertainment</option>
   <option value="documentary" <?php if($row['type']=="documentary") echo "selected" ?>>Documentary</option>
   <option value="horror" <?php if($row['type']=="horror") echo "selected" ?>>Horror</option>
   <option value="novel" <?php if($row['type']=="novel") echo "selected" ?>>Novel</option>
   <option value="knowledge" <?php if($row['type']=="knowledge") echo "selected" ?>>Knowledge</option>
   <option value="history" <?php if($row['type']=="history") echo "selected" ?>>History</option>
   </select>
    </div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" align = 'center'>Search</button>
      </div>
    </form>
    <br>
                <div class="row">
            <?php while($row=mysqli_fetch_assoc($res)){
                
                
                ?>
           
                
                
              
                
                 
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal<?php echo ++$x ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <center><img class="img-fluid" src="img/<?php echo $row['book_img'] ?>" alt="" /></center>
                        </div>
                    </div>
            <!-- Portfolio Modals-->
       
           
           

            
                
        
        
      
        <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $x ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal<?php echo ++$x ?>Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal<?php echo ++$x ?>Label"><?php echo $row['book_name']?></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="img/<?php echo $row['book_img'] ?>" alt="" width="300" height="300" />
                                    <!-- Portfolio Modal - Text-->
                                    <p align = 'left'>Type : <?php echo $row['type']?></p>
                                    <p align = 'left'>Detail : <?php echo $row['detail']?></p>
                                    <p align = 'left'>Price : <?php echo $row['price']?></p>
                                    <p align = 'left'>Stock : <?php echo $row['stock']?></p>
                                    <a href="cart.php"><button class="btn btn-primary" >
                                        
                                        <h3>Buy</h3>
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                
        <?php }?>
                   
                  
                   
                   
                
            
        </section>
    
    </div>

    <?php 
    //ท้าย
        require("include/footer2.php")
    ?>
</body>
</html>