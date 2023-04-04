<nav class="navbar navbar-expand-md bg-secondary fixed-top navbar-dark" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                    <img src="img/mge_1.jpg" alt="avatar mx-auto white" class="rounded-circle img-fluid" width="80" height="80">
                </a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto right">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php">Home</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="showuser.php"><?php echo $_SESSION['user_name']  ?></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="showbook.php">Buy Book</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>