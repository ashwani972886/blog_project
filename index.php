<?php

    include("functions.php");

    include("client_view/header.php");


    if($page == "blog"){
        include("client_view/single_blog.php");
    } else if($page == "about"){
        include("client_view/about.php");
    } else if($page == "contact"){
        include("client_view/contact.php");
    } else if($page == "cat_li"){
        include("client_view/category_list.php");
    } else if($page == "home"){
        include("client_view/home.php");
    } else {
        include("client_view/home.php");
    }
    

    include("client_view/footer.php");
    

?>