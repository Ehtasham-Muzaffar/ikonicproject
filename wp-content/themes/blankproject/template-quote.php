<?php 

// Template Name:Quote
get_header();

?>
<style>
    .container{
        display:flex;
        justify-content:center;
        align-items:center;
        width: 100%;
        height: 100vh;

    }
    ul li{
        color: black !important;
        
    }
    ul{
        list-style-type: decimal;
    }
</style>

<body><h1 class="text-center">task Show 5 Quote</h1>
    <div class="container">
        
    <ul id="quote" class="card border border-primary">
        
    </ul>
</div>

    

    <script>
        var quotes = document.querySelector("#quote")
        var html =``
        for(let i=0;i<5;i++){
        fetch('https://api.kanye.rest/').then(res=> res.json()).then((res)=>{ 
        html +=`<li class="list-group-item">${i+1} ${res.quote}</li>`
        console.log(res.quote)
        quotes.innerHTML=html
        console.log(html)
    }).catch(error=>console.log(console.log(error)))
}
    console.log(html)
   
        
        //fetch data from the api
    </script>

</body>
