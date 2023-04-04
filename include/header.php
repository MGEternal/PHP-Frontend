
<?php
    require("connect.php");
    session_start();
        
    if ($_SESSION['mem_type']=='user') {
        require("menu_user.php");
    }elseif ($_SESSION['mem_type']=='admin'){
        require("menu_admin.php");
    }else{
        require("menu.php");
    }
?>

    
