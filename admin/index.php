<?php

    include("functions.php");

    if($session_id){

        include("header.php");

        if($page == "dash"){
            
            include("dashboard.php");

        } else if($page == "new_post"){
            
            include("new_post.php");

        } else if($page == "post_li"){
            
            include("post_list.php");

        } else if($page == "cmnt_li"){
        
        include("comment_list.php");

        } else {
            include("dashboard.php");
        }

        include("footer.php");
    } else {

        include("admin_login.php");
    
    }
    

?>