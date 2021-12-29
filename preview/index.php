
<?php

    include("../admin/functions.php");
    $link = mysqli_connect("localhost", "root", "", "blog_db");
    // $link = mysqli_connect("156.67.222.106", "u735106373_blog_project", "0204@Anujk", "u735106373_blog_project");

    $query = "SELECT * FROM post_draft WHERE `id` = '".$_GET['draft']."' ";

    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);

    
    $splitDateTime = explode(" ",$row['date_time']);
    $date = $splitDateTime[0];
    $splitDate = explode("-",$date);

    $year = $splitDate[0];
    $month = $splitDate[1];
    $day = $splitDate[2];
            
    $monthName = date('M', mktime(0, 0, 0, $month, 10)); 

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview | <?php echo $row['title']; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/AqibSlider.css" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- <form method="POST" enctype="multipart/form-data">
        <button class="btn btn-success" name="publishBlog" style="-moz-transform: rotate(90deg); -ms-transform:rotate(90deg); -o-transform:rotate(90deg);-webkit-transform:rotate(90deg); position: fixed; right:0%; top: 50%; margin:0; width: 200px;"><h3 style="color: white;">Publish Now!</h3></button>
    </form> -->
    
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="../img/humberger/humberger-logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="#">Home</a></li>

                <li><a href="#">food recipes</a></li>
                <li><a href="#">fiction</a></li>
                <li><a href="#">relationship</a></li>
                <li><a href="#">fashion</a></li>
                <li><a href="#">travel</a></li>
                <li><a href="#">career</a></li>
                <li><a href="#">health &beauty</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__about">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>About me</h6>
            </div>
            <img src="../img/humberger/humberger-about.jpg" alt="">
            <h6>Hi every one! I,m Lena Mollein.</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>

            

        </div>
        <div class="humberger__menu__subscribe">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>Subscribe</h6>
            </div>
            <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
            <form action="#">
                <input type="text" class="email-input" placeholder="Your email">
                <label for="agree-check">
                    I agree to the terms & conditions
                    <input type="checkbox" id="agree-check">
                    <span class="checkmark"></span>
                </label>
                <button type="submit" class="site-btn">Subscribe</button>
            </form>
        </div>
    </div>
    <!-- Humberger End -->


    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-6 order-md-1 order-1">
                        <div class="header__humberger">
                            <i class="fa fa-bars humberger__open"></i>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>

                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#">food recepie</a></li>

                                <li><a href="#">fiction</a></li>
                                <li><a href="#">relationship</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">health &beauty</a></li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12">

                    <div class="header__logo">
                        <a href="#"><img src="../img/logo.png" alt=""></a>
                    </div>
                    
                </div>

            </div>
        </div>
    </header>
    <!-- Header Section End -->
    
    <!-- Single Post Section Begin -->
    <section class="single-post spad">
        <div>
            <img style="height: 50vh; width: 70vw; margin-left: 15%; border: 2px solid #F4952F; border-radius: 30px;" src="../admin/post_images/<?php echo $row['title_img']; ?>">
        </div>
        
        <div class="container">
            
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="single-post__title">
                        <div class="single-post__title__meta">
                            <h2><?php echo $day; ?></h2>
                            <span><?php echo $monthName; ?></span>
                        </div>
                        <div class="single-post__title__text">
                            <ul class="label">
                                <li><?php echo $row['category'] ?></li>
                                <li><?php echo $row['sub_category'] ?></li>
                            </ul>
                            <h4><?php echo $row['title'] ?></h4>
                            <ul class="widget">
                                <li>by <?php echo $row['user_name'] ?></li>
                                <li>20 Comment</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="single-post__social__item">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>

                    <?php
                        if($row['quote_s'] == "0"){
                    ?>
                        <div class="single-post__quote">
                            <p><?php echo $row['quote_desc'] ?></p>
                            <span><?php echo $row['quote_author'] ?></span>
                        </div>
                    <?php 
                        }
                    ?>

                    <div style="font-size: large;">
                        <?php echo $row['description'] ?>
                    </div>

                    <?php
                        if($row['quote_s'] == "1"){
                    ?>
                        <div class="single-post__quote">
                            <p><?php echo $row['quote_desc'] ?></p>
                            <span><?php echo $row['quote_author'] ?></span>
                        </div>
                    <?php 
                        }
                    ?>
                    <div class="single-post__tags">
                        <?php
                            $i = 0;
                            $get_tag = $row['tags'];
                            $tag = explode(',', $get_tag);
                            while($i < count($tag)){
                        ?>
                                <a href="#">
                                    <?php 
                                        
                                        echo $tag[$i];
                                    ?>
                                </a>
                        <?php
                                $i += 1;
                            }
                        ?>

                        
                    </div>
                    
                    <?php
                    
                        if($row['profile_s'] == "1"){

                    ?>
                        <div class="single-post__author__profile">
                            <div class="single-post__author__profile__pic">
                                <img src="../img/categories/single-post/author-profile.jpg" alt="">
                            </div>
                            <div class="single-post__author__profile__text">
                                <h4>Lena Mollein.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <div class="single-post__author__profile__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php 

                        }

                        if($row['comment_s'] == "1"){
                    
                    ?>

                        <div class="single-post__comment">
                            <div class="widget__title">
                                <h4>03 Comment</h4>
                            </div>
                            <div class="single-post__comment__item">
                                <div class="single-post__comment__item__pic">
                                    <img src="../img/categories/single-post/comment/comment-1.jpg" alt="">
                                </div>
                                <div class="single-post__comment__item__text">
                                    <h5>Brandon Kelley</h5>
                                    <span>15 Aug 2017</span>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-post__comment__item single-post__comment__item--reply">
                                <div class="single-post__comment__item__pic">
                                    <img src="../img/categories/single-post/comment/comment-2.jpg" alt="">
                                </div>
                                <div class="single-post__comment__item__text">
                                    <h5>Brandon Kelley</h5>
                                    <span>15 Aug 2017</span>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-post__comment__item">
                                <div class="single-post__comment__item__pic">
                                    <img src="../img/categories/single-post/comment/comment-3.jpg" alt="">
                                </div>
                                <div class="single-post__comment__item__text">
                                    <h5>Brandon Kelley</h5>
                                    <span>15 Aug 2017</span>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                        magnam.</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-share-square-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Single Post Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">
                <div class="footer__instagram__avatar">
                    <div class="footer__instagram__avatar--pic">
                        <img src="../img/footer/instagram-avatar.jpg" alt="">
                    </div>
                    <div class="footer__instagram__avatar--text">
                        <h5>@ foodieblog</h5>
                        <span>23,7k follower</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="../img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="../img/footer/ip-2.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="../img/footer/ip-3.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="../img/footer/ip-4.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="../img/footer/ip-5.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="../img/footer/ip-6.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__text">
                        <div class="footer__logo">
                            <a href="#"><img src="../img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut<br /> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo viverra<br /> maecenas accumsan lacus vel facilisis. </p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

    <?php
        if(isset($_POST['publishBlog'])){
            draftpost($session_id,2); 
        }
    ?>
</body>

</html>