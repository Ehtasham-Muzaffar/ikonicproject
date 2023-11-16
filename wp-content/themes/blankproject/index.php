<?php 
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align:center;
        font-family:'arial'
    }
</style>
<body>
    <?php 
    while(have_posts()){
        the_post();
        $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
        
    ?>    
    <img width="200" height="200" src="<?php echo $imagepath[0]; ?>" alt="">
<h1><?php the_title(); ?></h1>  
<p><?php the_excerpt(  ) ?></p>

        

    <?php }
 
 ?>
    



    

</body>
</html>