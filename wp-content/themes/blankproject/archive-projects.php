<?php 
// Template Name:achivepage
get_header();

$paged = get_query_var('paged')  ? get_query_var('paged'):1;
$args = array(
	'post_type'=> 'Project',
	'posts_per_page' => 6,
    'paged'=>$paged,
);
$loop = new WP_Query($args);
// echo "<pre>";
// print_r($loop);
// echo "</pre>";
?>

<h1 class="text-center">task showing 6 custome post type with pagination</h1>
<div class="main">
<div class="container">
    <?php 
while ( $loop->have_posts() ) {
	$loop->the_post();
    $getimage =  wp_get_attachment_image_src(get_post_thumbnail_id(),"large");
    // $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
	?>
	<div class="entry-content">
        <div class="box">
        <img src="<?php  echo $getimage[0] ?>"/>
		<?php the_title(); ?>
		<?php the_content(); ?>
	</div>
</div>

	<?php
}
?>

<?php
wp_reset_postdata();


?>
</div>
<div class="pagi">
    <?php
wp_pagenavi(array("query"=>$loop));

?>
</div>
</div>

<style>
    .pagi{
        display:flex;
        justify-content:center;
    }
    .main{
        margin: 0;
        padding: 0;

        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
      
       
    }
    .container{
        display: flex;
        justify-content: center;
        align-items: center;
       
        
        
    }
    .entry-content .box{
        width: 300px;
        
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        height: 200px;


    }
    .pagi{
width:100%;
    }
    .box img{
        width: 50%;

    }
    .entry-content .box:hover{
        transform: translateY(-20px);
        transition: 1s ease ;

    }


</style>