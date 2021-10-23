
<?php

    $filterd_cat = str_replace("_", " ", $category);

    

?>

<div  style=" background-color: #F4952F;" class="bound-mng" >


    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="icon-cross" viewBox="0 0 32 32">
                <title>close</title>
                <path d="M31.7 25.7L22 16l9.7-9.7a1 1 0 0 0 0-1.4L27.1.3a1 1 0 0 0-1.4 0L16 10 6.3.3a1 1 0 0 0-1.4 0L.3 4.9a1 1 0 0 0 0 1.4L10 16 .3 25.7a1 1 0 0 0 0 1.4l4.6 4.6a1 1 0 0 0 1.4 0L16 22l9.7 9.7a1 1 0 0 0 1.4 0l4.6-4.6a1 1 0 0 0 0-1.4z" />
            </symbol>
        </defs>
    </svg>

    <div  class="page" data-modal-state="closed">
        <!-- below this line  -->
        <div class="container bound-mng">
            <div  class="card-slider">



                <!--sec 1-->
                <div class="card-wrapper text-right">
                    <article style="border-radius: 30px !important; border: 5px solid black;"  class="card" id="card1">
                        <picture class="card__background">
                            <img  src="https://h.top4top.io/p_2090op8p41.jpeg">
                        </picture>
                        <h3 class="card__title">THE EVIL WITHIN</h3>
                        <div class="card__duration text-right">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                    </article>
                </div>

                <!--sec 2-->
                <div class="card-wrapper">
                    <article style="border-radius: 30px !important; border: 5px solid black;"  class="card" id="card2">
                        <picture class="card__background">
                            <img src="https://i.top4top.io/p_2090wxca12.jpeg">
                        </picture>
                        <h3 class="card__title text-right">RESIDENT EVIL</h3>
                        <div class="card__duration">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                    </article>
                </div>

                <!--sec 3-->
                <div class="card-wrapper">
                    <article style="border-radius: 30px !important; border: 5px solid black;"  class="card" id="card3">
                        <picture class="card__background">
                            <img src="https://j.top4top.io/p_20904bx7k3.jpeg">
                        </picture>
                        <h3 class="card__title">SILENT HILL</h3>
                        <div class="card__duration">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                    </article>
                </div>

                <!--sec 4-->
                <div class="card-wrapper">
                    <article  style="border-radius: 30px !important; border: 5px solid black;" class="card" id="card4">
                        <picture class="card__background">
                            <img src="https://mrkzgulfup.com/uploads/16323540476191.jpeg">
                        </picture>
                        <h3 class="card__title">FATAL FRAME</h3>
                        <div class="card__duration">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry </div>
                    </article>
                </div>

                <!--sec 5-->
                <div class="card-wrapper">
                    <article  style="border-radius: 30px !important; border: 5px solid black;" class="card" id="card5">
                        <picture class="card__background">
                            <img src="https://l.top4top.io/p_20905ncw25.png">
                        </picture>
                        <h3 class="card__title">HAUNTING GROUND</h3>
                        <div class="card__duration">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                    </article>
                </div>
            </div>
        </div>

        <div class="overlay"></div>
        <div class="modal-wrapper">
            <div class="modal">
                <button class="modal__close-button" type="button">
                    <!-- <h1>aqib</h1> -->
                    <svg class="icon icon-cross">
                        <use xlink:href="#icon-cross"></use>
                    </svg>
                </button>
                <div class="modal__scroll-area">
                    <header class="modal__header">
                        <div class="card__background">
                            <img id="modalImge" src="">
                        </div>
                        <h1 class="card__title" id="modalTitel"></h1>
                    </header>
                    <main class="modal__content">
                        <p id="p1"></p>
                        <p id="p2"></p>
                        <br>
                        <br>
                    </main>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Categories Section Begin -->
<section class="categories categories-grid spad">
    <div class="categories__post">
        <div class="container">
            <div class="categories__grid__post">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="breadcrumb__text">
                                <h2>Categories: <span><?php echo ucfirst($filterd_cat); ?></span></h2>
                                <div class="breadcrumb__option">
                                    <a href="?p=home">Home</a>
                                    <span><?php echo ucfirst($filterd_cat); ?></span>
                                </div>
                            </div>


                    <div>
                        <div class="categories__list__post__item">
                            <div class="row">

                                <?php
                                    $query = "SELECT * FROM sub_category WHERE `category` = '".$category."' ";

                                    $result = mysqli_query($link, $query);
                                    if(mysqli_num_rows($result)>0){
        
                                        $count = 0;
                                        while( $sub_categories = mysqli_fetch_assoc($result) ){
                                            $count++;
                                    
                                ?>

                                            <a href="?p=subCat&cat_val=<?php echo $category ?>&sub_cat_val=<?php echo $sub_categories['sub_category']?>">
                                                <div class="col-lg-4 col-md-4 hov-img" style="width: 100%;">
                                                    <div id="imgHov" style="border-radius: 15px !important; margin: 5px; margin-bottom: 20px !important; border:2px #F4952F solid " class="categories__post__item__pic set-bg"  data-setbg="img/categories/categories-list/cl-1.jpg">
                                                    </div>
                                                    <div class="categories__post__item__text text-center">
                                                        <span style="font-size: 30px ; " class="post__label"><?php echo ucfirst($sub_categories['sub_category']); ?></span>
                                                        <h3><a style="padding: 0px !important; margin: 10px 0px 10px 0px;" href="?p=subCat&sub_cat_val=<?php echo $sub_categories['sub_category']?>"></a></h3>
                                                    </div>
                                                </div>
                                            </a>

                                <?php 
                                        }
                                    }
                                ?>

                                

                            </div>

                        </div>
                        


                        <div class="col">
                            <div class="col-lg-12">
                                <div class="categories__pagination">
                                    <a href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->