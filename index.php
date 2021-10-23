<?php

    include("functions.php");
    $page = isset($_GET['p']) ? $_GET['p'] : '';
    $category = isset($_GET['cat']) ? $_GET['cat'] : '';
    $category_val = isset($_GET['cat_val']) ? $_GET['cat_val'] : '';
    $sub_category_val = isset($_GET['sub_cat_val']) ? $_GET['sub_cat_val'] : '';

    include("client_view/header.php");

    if($page == "cat_li"){
        include("client_view/category_list.php");
    } else if($page == "subCat"){
        include("client_view/sub_category_list.php");
    } else if($page == "about"){
        include("client_view/about.php");
    } else if($page == "contact"){
        include("client_view/contact.php");
    } else if($page == "home"){
        include("client_view/home.php");
    } else {
        include("client_view/home.php");
    }
    

    include("client_view/footer.php");
    

?>