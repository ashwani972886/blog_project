<?php

    include("functions.php");

    

    if(!$session_admin){

        include("header.php");

        if($page == "dash"){
            
            include("dashboard.php");

        } else if($page == "new_post"){
            
            include("new_post.php");

        } else {
            include("dashboard.php");
        }

        include("footer.php");
    } else {

        include("admin_login.php");
    
    }
    
    



?>