
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">

                <!-- <div class="footer__instagram__avatar" style="width: 250px;">

                    <div class="footer__instagram__avatar--pic">
                        <img src="img/footer/vh_logo_title.png" alt="">
                    </div>
                    <div class="footer__instagram__avatar--text">

                        <h5 style="font-size: 15px; font-family: 'Oooh Baby', cursive;">@VisionHouse</h5>

                        <span>23,7k follower</span>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.png"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-2.png"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-3.png"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-4.png"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-5.png"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-6.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__text">
                        <div class="footer__logo">
                            <a href="?p=home"><img src="img/logo_vh.png" alt="Vision House"></a>
                        </div>
                        <p>We at <b>Vision House</b> make sure that whoever visits here either reader or blogger do not get bored. We also make sure that everyone get sufficient content to read of their choice. And the one who wants to blog gets an easy to use interface to write and view stats for their content. Also it will bring more zeal and enthusiasm for one to write.
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i>
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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
    <script src="js/script.js"></script>


    <!-- Js Plugins -->

    <script src="js/AqibSlider.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    

    <script>

        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            // console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            // console.log('Name: ' + profile.getName());
            // console.log('Image URL: ' + profile.getImageUrl());
            // console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
            $.ajax({
                type: "POST",
                url: "actions.php?action=viewerSignIn",
                data:  "user_name=" + profile.getName() + "&user_email=" + profile.getEmail(),
                success: function(result) {
                    // console.log(result);
                    if(result == 1){
                        window.location.reload('http://localhost/blog_project/?p=blogView&id=1');
                    }
                    
                }
        
            });
        }

    </script>


    <script src="https://apis.google.com/js/platform.js" async defer></script>  



</body>

</html>