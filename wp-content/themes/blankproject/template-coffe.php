<?php 
// Template Name:Coffe
get_header();

$response = wp_remote_get( 'https://coffee.alexflipnote.dev/random.json' );
$jresoponse= json_decode($response["body"],true); 
// print_r($jresoponse);
// echo $jresoponse['file'];
// print_r($response["body"]);

?>

<style>
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;

}
#coffe{
    width: 50%;
    height: 50vh;
        border-radius: 16px;
        

}
</style>
<body>
    <h1 class="text-center">Task Give me Coffe</h1>
    <div class="container">
        <img id="coffe" class="card" src="<?php echo $jresoponse['file'] ?>" />
</div>

    
</body>
