<?php

    date_default_timezone_set('Asia/Kolkata');

    $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");

    if (mysqli_connect_errno()) {
        
        print_r(mysqli_connect_error());
        exit();
        
    }


?>