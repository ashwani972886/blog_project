<?php

    include("functions.php");
    $page = isset($_GET['p']) ? $_GET['p'] : '';

    include("client_view/header.php");


    if($page == "blog"){
        include("client_view/single_blog.php");
    } else if($page == "about"){
        include("client_view/about.php");
    } else if($page == "contact"){
        include("client_view/contact.php");
    } 
    // added by me 
    else if($page == "123"){
        include("client_view/category_list.php");
    }
    // till here
    else if($page == "subCat"){
        include("client_view\insideView.php");
    }
    // till here
    else if($page == "cat_li"){
        include("client_view/category_list.php");
    } else if($page == "home"){
        include("client_view/home.php");
    } else if($page == "relation"){
        include("client_view/category_list.php");
    } else {
        include("client_view/home.php");
    }
    

    include("client_view/footer.php");
    

?>