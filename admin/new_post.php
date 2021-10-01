
<!-- New Blog start -->
<div>

    <form method="POST">
        <textarea name="editor1" id="editor1"></textarea>

        <button name="button">Click ME</button>
    </form>
    <script>
            CKEDITOR.replace( 'editor1' );
            
    </script>


</div>

<?php

if(isset($_POST['button'])){
    echo $_POST['editor1'];
}


?>
