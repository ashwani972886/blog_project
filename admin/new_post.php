
<!-- Header start -->
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <!-- <div class="page-title-icon">
                
                <i class="icon-gradient bg-happy-itmeo fa fa-list-alt" aria-hidden="true"></i>
            </div> -->
            <div>
               Blog
                <div class="page-title-subheading">Add new blog to yuor profile!</div>
            </div>
        </div>
        <!-- Generator -->
        <div class="page-title-actions">
            <div class="position-relative form-group">
                <a href="" class="noLineHref" data-toggle="modal" data-target="#newCategory"><button class="btn btn-primary">Preview</button></a>
            </div>
        </div>

    </div>
</div>

<!-- Header End -->

<!-- New Blog start -->
<div class="tab-content">


    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Grid Rows</h5>
                <form class="">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="with a placeholder" type="email" class="form-control"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="examplePassword11" class="">Password</label><input name="password" id="examplePassword11" placeholder="password placeholder" type="password"
                                                                                                                                     class="form-control"></div>
                        </div>
                    </div>
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Address</label><input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                    <div class="position-relative form-group"><label for="exampleAddress2" class="">Address 2</label><input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group"><label for="exampleCity" class="">City</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="position-relative form-group"><label for="exampleState" class="">State</label><input name="state" id="exampleState" type="text" class="form-control"></div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group"><label for="exampleZip" class="">Zip</label><input name="zip" id="exampleZip" type="text" class="form-control"></div>
                        </div>
                    </div>
                    <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Check me out</label></div>
                    <button class="mt-2 btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
        
    </div>



    <!-- <form method="POST">
        <textarea name="editor1" id="editor1"></textarea>

        <button name="button">Click ME</button>
    </form>
    <script>
            CKEDITOR.replace( 'editor1' );
            
    </script> -->


</div>
<!-- New Blog End -->

<!-- Footer Start -->
<div class="app-wrapper-footer fixed-footer">
    <div class="app-footer ">
        <div class="app-footer__inner ">
            <div class="app-footer-left">
                <ul class="nav">
                    <li class="nav-item">
                        <button class="btn btn-warning">
                            Save as Draft
                        </button>
                    </li>
                </ul>
            </div>
            <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <button class="btn btn-danger">
                            Publish
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> 
<!-- Footer end -->

<?php

if(isset($_POST['button'])){
    echo $_POST['editor1'];
}


?>
