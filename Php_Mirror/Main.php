<?php
    $brand = "Kapoy☕Coffe";

    $motto ="Our business aims to satisfy the needs of our customers for delicious coffees and provide 
    a nutritional treat for such an affordable price that it will be worth the customer’s money.	";

    $caramel ="<q>It’s amazing how the world begins to change through the eyes of a cup of coffee.</q><br>
    <br>~ Donna A. Favors";

    $hazelnut ="<q>The powers of a man’s mind are directly proportional to the quantity of coffee he drinks.
    </q><br><br>~ James Makintosh";

    $americano ="<q>We want to do a lot of stuff; we’re not in great shape. We didn’t get a good night’s sleep.
     We’re a little depressed. Coffee solves all these problems in one delightful little cup.</q><br><br>~ Jerry Seinfeld";



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
        <title>Kapoy Coffee Bussiness</title>
         <!--- below is the connection of calling css to format the display of html -->
        <!--- we also used inline css -->
        <link rel="stylesheet" href="./css/style.css">
          <!--- below is the website icon -->
          <link rel="icon" href="KapoyIcon.jpg">
        <style>
            #showcase {
                min-height: 400px;
                background-image: src("coffee2.jpg");
                text-align: center;
                color:cornsilk;
                }
        </style>


    <body>
        <!--- below is the header -->
        <header>
            <!-- div area for the branding -->
                <div class="container">
                <div id="branding">
                    <h1 class="kaptitle"><?php echo $brand ?></h1>
                        </div>
                        <script>
                            // created an object ot as "text" and chose a querySelector then locate the fancy class
                            const text1 = document.querySelector(".kaptitle")
                            // created an object to convert the "text" container value that is read by the .textContent
                            const strText1 = text1.textContent;
                            // calling the "strText" value if the conversion is succesfull.
                            //console.log(strText)
                
                            // created an object to convert the string value to split and contain in the char value to a array 
                            const splitText1 = strText1.split("")
                            //checking of the split Text
                            //console.log(splitText)
                
                            text1.textContent=""; // set the "textContent" value to be empty 
                
                            for(let i=0; i < splitText1.length; i++) {
                                text1.innerHTML += "<span>"+splitText1[i]+"</span>";
                            }
                            let char1 = 0;
                            let timer1 = setInterval(onTick1,50);
                
                            function onTick1(){
                                try{
                                const span = text1.querySelectorAll("span")[char1];
                                
                                span.classList.add('fade');
                                char1++
                
                                if(char1 === splitText1.length){
                                    complete();
                                    return
                                    }
                                }
                                    catch (e){
                                        return
                                    }
                            }
                            
                            const debug = true;

            function log(message) {
            if (debug) { 
                console.log(message);
            }
            }

                        </script>

                <!--- below is the navigation area -->
                <nav>
                <ul>
                    <li class="current"><a href="Main.php">Home</a>
                    <li><a href="about.php">About</a>
                    <li><a href="Orders.php">Orders</a>
                </ul>
                </nav>
            </div>

        </header>

        <!--- below is the showcase area which displays image -->
        <section id="showcase">
        
            <div class="container">
                <h1><?php echo $brand ?></span></h1>
                <h4 class = "sent-notification"></h4>

                <p style="font-family:cursive ; font-size: 20px; text-shadow: grey;"><?php echo $motto ?></p>
            </div>
        </section>
        <!--- below is the area where html supporting detailes are introduced -->
        <section id="newsletter">
            <div class="container">
                <h1 class="philip" style="float: right; font-family: cursive; font-size: 30px ;" >The <b style="color:blue;">Phil</b><b style="color:yellow">lipp</b><b style="color: red;">ine's</b> Kapoy☕<b style="color: rgb(201, 189, 132)">Coffee</b></h1>
        </section>
        <!--- below is the boxes that displays the website softwares used for the website-->
        <section id="boxes">
            <div class="container">
                <div class="box">
                    <img src="./Images/caramel-mocha-latte.jpg" height="100%" width="100%" style=" border-radius: 8px;  ">
                    <h3>Caramel Latte</h3>
                    <p><?php echo $caramel ?></p>
                </div>
                <div class="box">
                    <img src="./Images/Chocolate-Hazelnut-Latte-5-500x500.jpg"  height="max" width="100%" style=" border-radius: 8px;  ">
                    <h3>Hazelnut Latte</h3>
                    <p><?php echo $hazelnut ?></p>
                </div>
                <div class="box">
                    <img src="./Images/americano.jpg"  height="100%" width="100%" style=" border-radius: 8px;  ">
                    <h3>Americano Latte</h3>
                    <p><?php echo $americano ?></p>
                </div><section>
                <img src="Images/html.png" height="10%" width="10%" style=" border-radius: 8px;  ">
                <img src="Images/css.png" height="10%" width="10%" style=" border-radius: 8px;  ">
                <img src="Images/graphic.png" height="10%" width="10%" style=" border-radius: 8px;  ">
                </section>
            </div>
        </section>

    </body>
    <!--- below is the footer section-->
    <footer>
        <p>JheyDesign, Copyright&copy;2021 </p>
    </footer>


</html>