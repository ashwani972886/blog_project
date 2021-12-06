<?php

    $query_draft = "SELECT * FROM `post_draft` WHERE `user_id` = '".$user['user_id']."' AND `title` != '' ORDER BY id DESC";
    
    $result_draft = mysqli_query($link, $query_draft);

    $query_posts = "SELECT * FROM `posts` WHERE `user_id` = '".$user['user_id']."' ORDER BY id DESC";

    $result_posts = mysqli_query($link, $query_posts);


?>

<!-- Header start -->
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <!-- <div class="page-title-icon">
                
                <i class="icon-gradient bg-happy-itmeo fa fa-list-alt" aria-hidden="true"></i>
            </div> -->
            <div>
               POST LISTS
                <div class="page-title-subheading">View all your blogs here</div>
            </div>
        </div>
        <!-- Generator -->
        <div class="page-title-actions">
            <div class="position-relative form-group">
                <a href="" class="new_post noLineHref"><button class="btn btn-info" style="font-size: 24px; width: auto;">Create A Blog</button></a>
            </div>
        </div>

    </div>
</div>
<!-- Header End -->
<div>
  <?php
    if(mysqli_num_rows($result_posts) > 0 ){
      while($posts = mysqli_fetch_assoc($result_posts)){
        $valueString = stringShorten($posts['description'], $posts['id'],0);
        $time = $posts['date_time'];
        $timeago = get_timeago(strtotime($time));
  ?>
  <form method="POST" enctype="multipart/form-data">
    <div class="card mb-3">
     <img src="assets/images/logo-inverse.png"  alt="..." width="500" height="100">
     <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
      </svg>
      22
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
      </svg>
      22
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
      </svg>
      22
      <div style="float:right">
      
      <button type="button" class="btn btn-info">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-dark">publish</button>
      <button type="button" class="btn btn-dark">Preview</button>
      </div>
     </div>
    </div>
    <div class="card mb-3">
    <div><h1 class="text-danger text-decoration-underline">Draft</h1></div>

       <img src="assets/images/logo-inverse.png"  alt="..." width="500" height="100">
       <div class="card-body">
       <h5 class="card-title">Card title</h5>
       <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
       <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
       <div style="float: right">
       
      <button type="button" class="btn btn-info">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-dark">share</button>
      </div>
      </div> 
    </div>
</div>

<div>
    <div class="card mb-3">
     <img src="..." class="card-img-top" alt="...">
     <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      <div style="float:right">
      
      <button type="button" class="btn btn-info">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-dark">Publish</button>
      <button type="button" class="btn btn-dark">Preview</button>
      </div>
     </div>
    </div>
    <div class="card mb-3">

      <img src="post_images/<?php echo $posts['title_img']; ?>"  alt="..." width="30%" height="30%">

      <div class="card-body">
        <h5 class="card-title card-title-font"><?php echo $posts['title']; ?></h5>
        <p class="card-text"><?php echo $valueString; ?></p>
        <p class="card-text"><small class="text-muted">Last updated about <?php echo $timeago; ?></small></p>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 22">
          <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
        </svg>
        <b style="font-size: 20px; ">22</b>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 22">
          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
        </svg>
        <b style="font-size: 20px; ">22</b>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people" viewBox="0 0 16 22">
          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
        </svg>
        <b style="font-size: 20px; ">22</b>
        <div style="float:right">
          <button type="button" class="btn btn-info">Edit</button>
          <button type="submit" class="btn btn-danger" name="delete_post" value="<?php echo $posts['id']; ?>">Delete</button>
          <a href="../?p=blogView&id=<?php echo $posts['id']; ?>"><button type="button" class="btn btn-warning">View Post</button></a>
          <button type="button" class="btn btn-light">Share</button>
          
        </div>
      </div>
    </div>
  </form>
  <?php
      }
    }

    if(mysqli_num_rows($result_draft) > 0){
      while($drafts = mysqli_fetch_assoc($result_draft)){
        $valueString = stringShorten($drafts['description'], $drafts['id'], 1);
        $time = $drafts['date_time'];
        $timeago = get_timeago(strtotime($time));
       

  ?>
        <form method="POST" enctype="multipart/form-data">
          <div class="card mb-3">
          <img src="post_images/<?php echo $drafts['title_img']; ?>"  alt="..." width="30%" height="30%">    
            <div class="card-body">
            
            <img src="assets/images/draft_icon.png" alt="" width="7%" style="position: absolute; right: 10px; top: 5px; ">
              
              <h3 class="card-title card-title-font"><?php echo $drafts['title']; ?></h3>
              <p class="card-text"><?php echo $valueString; ?></p>
              <p class="card-text"><small class="text-muted">Last updated about <?php echo $timeago; ?></small></p>
              <div style="float: right">
                <a href="?p=new_post&draft=<?php echo $drafts['id']; ?>" target="_blank"><button type="button" class="btn btn-info">Edit</button></a>
                <button type="submit " class="btn btn-danger" name="delete_draft" value="<?php echo $drafts['id']; ?>">Delete</button>
                <a href="../preview/?draft=<?php echo $drafts['id']; ?>" target='_blank'><button type="button" class="btn btn-warning">Preview</button></a>
                <button type="button" class="btn btn-success">Publish</button>
              </div>
            </div> 
          </div>
        </form>
  <?php
      }
    }

  ?>
</div>

<?php

    if(isset($_POST['delete_draft'])){

      $selectImage = "SELECT `title_img` FROM `post_draft` WHERE id = '".$_POST['delete_draft']."' LIMIT 1";
      $resultImage = mysqli_query($link, $selectImage);
      $image = mysqli_fetch_assoc($resultImage);
      deleteData($_POST['delete_draft'], $image['title_img'],1); 
    }

    if(isset($_POST['delete_post'])){

      $selectImage = "SELECT `title_img` FROM `posts` WHERE id = '".$_POST['delete_post']."' LIMIT 1";
      $resultImage = mysqli_query($link, $selectImage);
      $image = mysqli_fetch_assoc($resultImage);
      deleteData($_POST['delete_post'], $image['title_img'],0); 
    }

?>

