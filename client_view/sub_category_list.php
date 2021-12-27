
<?php

    $filterd_cat = str_replace("_", " ", $category_val);

    $filterd_sub_cat = str_replace("_", " ", $sub_category_val);


?>  

<!-- Categories Section Begin -->
<section class="categories categories-grid spad">
        <div class="categories__post">
            <div class="container">
                <div class="categories__grid__post">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="breadcrumb__text">
                                <h2>Sub Categories: <span><b> <?php echo ucfirst($filterd_cat); ?> / <?php echo ucfirst($filterd_sub_cat); ?></b></span></h2>
                                <div class="breadcrumb__option">
                                    <a href="?p=home">Home</a>
                                    <span><?php echo ucfirst($filterd_cat); ?> /<b> <?php echo ucfirst($filterd_sub_cat); ?> </b></span>
                                </div>
                            </div>

                            <?php
                                $query = "SELECT * FROM posts WHERE `sub_category` = '".$sub_category_val."' ";

                                $result_sub = mysqli_query($link, $query);
                                if(mysqli_num_rows($result_sub)>0){
    
                                    $count = 0;
                                    while( $posts = mysqli_fetch_assoc($result_sub) ){
                                        $count++;

                                        $splitDateTime = explode(" ",$posts['date_time']);
                                        $date = $splitDateTime[0];
                                        $splitDate = explode("-",$date);

                                        $year = $splitDate[0];
                                        $month = $splitDate[1];
                                        $day = $splitDate[2];
                                                
                                        $monthName = date('M', mktime(0, 0, 0, $month, 10));
                                
                            ?>

                            <div class="categories__list__post__item">
                                <div class="row inside-hov-img">
                                    <div class="col-lg-6 col-md-6">
                                        <a href="?p=blogView&id=<?php echo $posts['id']; ?>">    
                                            <div id="imgHov" style="border-radius: 15px !important; margin: 5px; transform: <?php if($count%2 == 0){echo "rotate(5deg)";} else { echo "rotate(-5deg)";} ?>; border:2px #F4952F solid " class="categories__post__item__pic set-bg "
                                                data-setbg="admin/post_images/<?php echo $posts['title_img']; ?>">
                                                <div class="post__meta">
                                                    <h4><?php echo $day; ?></h4>
                                                    <span><?php echo $monthName; ?></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="categories__post__item__text">
                                            <a href="?p=blogView&id=<?php echo $posts['id']; ?>"> 
                                                <!-- <span style="font-size: 40px ; " class="post__label">Apple</span> -->
                                                <h3><a style="padding: 0px !important; margin: 10px 0px 10px 0px;" href="?p=blogView&id=<?php echo $posts['id']; ?>"><?php echo $posts['title']; ?></a></h3>
                                                <ul class="post__widget">
                                                    <li>by <span><?php echo $posts['user_name']; ?></span></li>
                                                    <!-- <li>3 min read</li> -->
                                                    <li><?php echo $posts['Comments']; ?> Comment</li>
                                                </ul>
                                                <p><?php echo substr($posts['description'], 0, 200); ?> ...</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                <div class="categories__list__post__item">
                                    <div class="row inside-hov-img">
                                        <div class="col-lg-6 col-md-6">
                                            <a href="?p=blogView&id=<?php echo $posts['id']; ?>">
                                                <div id="imgHov" style="border-radius: 15px !important; margin: 5px; transform: <?php if($count%2 == 0){echo "rotate(5deg)";} else { echo "rotate(-5deg)";} ?>; border:2px #F4952F solid " class="categories__post__item__pic set-bg "
                                                    data-setbg="admin/post_images/<?php echo $posts['title_img']; ?>">
                                                    <div class="post__meta">
                                                        <h4><?php echo $day; ?></h4>
                                                        <span><?php echo $monthName; ?></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6">
                                            <div class="categories__post__item__text">
                                                <a href="?p=blogView&id=<?php echo $posts['id']; ?>">
                                                    <!-- <span style="font-size: 40px ; " class="post__label">Apple</span> -->
                                                    <h3><a style="padding: 0px !important; margin: 10px 0px 10px 0px;" href="?p=blogView&id=<?php echo $posts['id']; ?>"><?php echo $posts['title']; ?></a></h3>
                                                    <ul class="post__widget">
                                                        <li>by <span><?php echo $posts['user_name']; ?></span></li>
                                                        <li>3 min read</li>
                                                        <li>20 Comment</li>
                                                    </ul>
                                                    <p><?php echo substr($posts['description'], 0, 200); ?> ...</p>
                                                </a>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                            <?php
                            
                                    }
                                }
                            
                            ?>

                            <!-- <div class="row">
                                <div class="col-lg-12">
                                  
                                        <div class="categories__pagination">
                                            <a href="#">1</a>
                                            <a href="#">2</a>
                                            <a href="#">3</a>
                                            <a href="#">Next</a>
                                        </div>
                                
                                </div>
                            </div> -->
                            
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="sidebar__item">
                                <!-- <div class="sidebar__about__item">
                                    <div class="sidebar__item__title">
                                        <h6>About me</h6>
                                    </div>
                                    <img src="img/sidebar/sidebar-about.jpg" alt="">
                                    <h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <a href="#" class="primary-btn">Read more</a>
                                </div> -->
                                <div class="sidebar__follow__item">
                                    <div class="sidebar__item__title">
                                        <h6 style="font-size: large;"> <b> Follow Us </b></h6>
                                    </div>
                                    <div class="sidebar__item__follow__links">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </div>
                                </div>
                                <!-- <div class="sidebar__feature__item">
                                    <div class="sidebar__item__title">
                                        <h6 style="font-size: large;"><b>Feature Posts</b> </h6>
                                    </div>
                                    <div class="sidebar__feature__item__large set-bg"
                                        data-setbg="img/sidebar/feature-post.jpg">
                                        <div class="sidebar__feature__item__large--text">
                                            <span>Dinner</span>
                                            <h5><a href="#">This Japanese Way of Making Iced Coffee Is a Game...</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list">
                                        <div class="sidebar__feature__item__list__single">
                                            <div class="post__meta">
                                                <h4>08</h4>
                                                <span>Aug</span>
                                            </div>
                                            <div class="post__text">
                                                <span>Dinner</span>
                                                <h5><a href="#">Grilled Potato and Green Bean Salad</a></h5>
                                            </div>
                                        </div>
                                        <div class="sidebar__feature__item__list__single">
                                            <div class="post__meta">
                                                <h4>05</h4>
                                                <span>Aug</span>
                                            </div>
                                            <div class="post__text">
                                                <span>Smoothie</span>
                                                <h5><a href="#">The $8 French Rosé I Buy in Bulk Every Summer</a></h5>
                                            </div>
                                        </div>
                                        <div class="sidebar__feature__item__list__single">
                                            <div class="post__meta">
                                                <h4>26</h4>
                                                <span>jul</span>
                                            </div>
                                            <div class="post__text">
                                                <span>Desert</span>
                                                <h5><a href="#">Ina Garten's Skillet-Roasted Lemon Chicken</a></h5>
                                            </div>
                                        </div>
                                        <div class="sidebar__feature__item__list__single">
                                            <div class="post__meta">
                                                <h4>16</h4>
                                                <span>jul</span>
                                            </div>
                                            <div class="post__text">
                                                <span>Vegan</span>
                                                <h5><a href="#">The Best Weeknight Baked Potatoes, 3 Creative Ways</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!--   -->
                                <!-- <div class="sidebar__item__categories">
                                    <div class="sidebar__item__title">
                                        <h6>Categories</h6>
                                    </div>
                                    <ul>
                                        <li><a href="#">Relationship <span>128</span></a></li>
                                        <li><a href="#">Dinner <span>32</span></a></li>
                                        <li><a href="#">Dessert <span>86</span></a></li>
                                        <li class="p-left"><a href="#">Smothie <span>25</span></a></li>
                                        <li class="p-left"><a href="#">Drinks <span>36</span></a></li>
                                        <li class="p-left"><a href="#">Cakes <span>15</span></a></li>
                                        <li><a href="#">Vegan <span>63</span></a></li>
                                        <li><a href="#">Weightloss <span>27</span></a></li>
                                    </ul>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->