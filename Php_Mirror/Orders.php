<?php

    $brand = "Kapoy☕Coffe";

    $dkapoyca ="Rich espresso is gently swirled with flavors of caramel and vanilla, steamed milk and
    simple syrup, then drizzled with mocha and caramel sauces.";

    $dkapoyha ="Hazelnut-praline-infused milk combined with our small-lot espresso — a true character of
    sweetly nut love.";

    $damerican ="Espresso shots topped with hot water create a light layer of crema culminating in this
    wonderfully rich cup with depth and nuance. Pro Tip: For an additional boost, ask your barista to
    try this with an extra shot.";



    

?>

<!DOCTYPE HTML>
<html lang="en">
<html>
    <head>                
        <!--- below is the standard meta code -->
        <meta charset="UTF-8">
       <!--- below is the standard meta code --> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--- below is title of the Website  -->
        <title>Orders</title>
        <!--- below is the connection of calling css to format the display of html -->
        <!--- we also used inline css -->
        <link rel="stylesheet" href="./css/style.css">
          <!--- below is the website icon -->
        <link rel="icon" href="KapoyIcon.jpg">    
    </head>

    <body>
        <!--- below is the header -->
            <header>
        <!-- div area for the branding -->
            <div class="container">
            <div id="branding">
                <h1 class="kaptitle3"><?php echo $brand ?></h1>
                    </div>
                <script>
                    // created an object ot as "text" and chose a querySelector then locate the fancy class
                        const text3 = document.querySelector(".kaptitle3")
                    // created an object to convert the "text" container value that is read by the .textContent
                        const strText3 = text3.textContent;
                    // calling the "strText" value if the conversion is succesfull.
                    //console.log(strText)
            
                    // created an object to convert the string value to split and contain in the char value to a array 
                        const splitText3 = strText3.split("")
                    //checking of the split Text
                    //console.log(splitText)
            
                        text3.textContent=""; // set the "textContent" value to be empty 
            
                    for(let i=0; i < splitText3.length; i++) {
                        text3.innerHTML += "<span>"+splitText3[i]+"</span>";
                        }
                        let char3 = 0;
                        let timer3 = setInterval(onTick3,50);
            
                        function onTick3(){
                        const span = text3.querySelectorAll("span")[char3];
                            try{
                                span.classList.add('fade');
                                char3++
                
                                if(char3 === splitText3.length){
                                    complete();
                                    return
                                    }
                                }
                            catch(e){
                            }
                        }

                </script>

                <nav>
                    <ul>
                        <li ><a href="Main.php">Home</a>
                        <li><a href="about.php">About</a>
                        <li class="current"><a href="Orders.php">Orders</a>
                    </ul>
            </div>
        </header>
       <!--- below is the showcase area which displays image -->
        <section id="main">
            <div class="container">
                <article id="main-col">
                   <ul id="Orders">
                        <!-- products best seller's -->
                        <li>
                            <h3 class="call1">KAPOYCA☕(Caramel-Latte)</h3>
                            <script>
                                // created an object ot as "text" and chose a querySelector then locate the fancy class
                                    const textc1 = document.querySelector(".call1")
                                // created an object to convert the "text" container value that is read by the .textContent
                                    const strTextc1 = textc1.textContent;
                                // calling the "strText" value if the conversion is succesfull.
                                //console.log(strText)
                        
                                // created an object to convert the string value to split and contain in the char value to a array 
                                    const splitTextc1 = strTextc1.split("")
                                //checking of the split Text
                                //console.log(splitText)
                        
                                    textc1.textContent=""; // set the "textContent" value to be empty 
                        
                                for(let i=0; i < splitTextc1.length; i++) {
                                    textc1.innerHTML += "<span>"+splitTextc1[i]+"</span>";
                                    }
                                    let charc1 = 0;
                                    let timerc1 = setInterval(onTickc1,50);
                        
                                    function onTickc1(){
                                    const span = textc1.querySelectorAll("span")[charc1];
                                        try{
                                            span.classList.add('fade');
                                            charc1++
                            
                                            if(charc1 === splitTextc1.length){
                                                complete();
                                                return
                                                }
                                            }
                                        catch(e){
            
                                        }
                                    }
            
                            </script>
                            <p> <?php echo $dkapoyca ?></p>
                            <p><b>Pricing:</b>  <strong>&#8369 100.00</strong> Pesos</p>
                        </li>
                        <li>
                            <h3 class="call2">KAPOYHA☕(Hazelnut-Latte) </h3>
                            <script>
                                // created an object ot as "text" and chose a querySelector then locate the fancy class
                                    const textc2 = document.querySelector(".call2")
                                // created an object to convert the "text" container value that is read by the .textContent
                                    const strTextc2 = textc2.textContent;
                                // calling the "strText" value if the conversion is succesfull.
                                //console.log(strText)
                        
                                // created an object to convert the string value to split and contain in the char value to a array 
                                    const splitTextc2 = strTextc2.split("")
                                //checking of the split Text
                                //console.log(splitText)
                        
                                    textc2.textContent=""; // set the "textContent" value to be empty 
                        
                                for(let i=0; i < splitTextc2.length; i++) {
                                    textc2.innerHTML += "<span>"+splitTextc2[i]+"</span>";
                                    }
                                    let charc2 = 0;
                                    let timerc2 = setInterval(onTickc2,50);
                        
                                    function onTickc2(){
                                    const span = textc2.querySelectorAll("span")[charc2];
                                        try{
                                            span.classList.add('fade');
                                            charc2++
                            
                                            if(charc2 === splitTextc2.length){
                                                complete();
                                                return
                                                }
                                            }
                                        catch(e){
            
                                        }
                                    }
            
                            </script>
                            <p><?php echo $dkapoyha ?></p>
                            <p><b>Pricing:</b>  <strong>&#8369 100.00</strong> Pesos</p>
                        </li>
                        <li>
                            <h3 class="call3">KAPOYNO☕(Americano)</h3>
                            <script>
                                // created an object ot as "text" and chose a querySelector then locate the fancy class
                                    const textc3 = document.querySelector(".call3")
                                // created an object to convert the "text" container value that is read by the .textContent
                                    const strTextc3 = textc3.textContent;
                                // calling the "strText" value if the conversion is succesfull.
                                //console.log(strText)
                        
                                // created an object to convert the string value to split and contain in the char value to a array 
                                    const splitTextc3 = strTextc3.split("")
                                //checking of the split Text
                                //console.log(splitText)
                        
                                    textc3.textContent=""; // set the "textContent" value to be empty 
                        
                                for(let i=0; i < splitTextc3.length; i++) {
                                    textc3.innerHTML += "<span>"+splitTextc3[i]+"</span>";
                                    }
                                    let charc3 = 0;
                                    let timerc3 = setInterval(onTickc3,50);
                        
                                    function onTickc3(){
                                    const span = textc3.querySelectorAll("span")[charc3];
                                        try{
                                            span.classList.add('fade');
                                            charc3++
                            
                                            if(charc3 === splitTextc3.length){
                                                complete();
                                                return
                                                }
                                            }
                                        catch(e){
            
                                        }
                                    }
            
                            </script>
                            <p><?php echo $damerican ?></p>
                            <p><b>Pricing:</b>  <strong>&#8369 100.00</strong> Pesos</p>
                        </li>
                   </ul>
                </article>
            </div>
        </section>
    </body>
    <footer>
        <p>JheyDesign, Copyright&copy;2021 </p>
    </footer>


</html>
