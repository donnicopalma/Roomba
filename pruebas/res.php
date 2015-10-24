    <?php
    
    include("resize.php");
    $thumb=new thumbnail("galley_images/archive-shenmue0.jpg");
    $thumb->size_height(250);
    $thumb->jpeg_quality(80);
    $thumb->save("photo.jpg");
    
    ?>