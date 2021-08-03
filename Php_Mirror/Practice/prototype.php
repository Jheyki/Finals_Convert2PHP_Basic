<?php

    $brand = "Kapoy☕Coffee";

    $About = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Taste and See Kapoy Coffee Shop and a unique coffee house 
        environment unlike any other in Taguig. We are not only a place to drop in and get your morning cup 
        of coffee (although you are more than welcome to do that), we are a place where you can sit down and
        enjoy that tailor-made cup of coffee. If you need to work, we have a seating area created specifically
        for you. If you need to rest, we have a soft-seating area in front of a stone fire place that is 
        perfect for your weary mind and body. We offer a delicious variety of coffee from Kapoy Coffee made 
        by our professionally trained baristas. We have everything from classic coffee to our house made 
        specialty beverages. All of our sauces & syrups are made in-house with all natural ingredients 
        (no chemicals or preservatives) ensuring you the highest quality in taste & health. You can complete 
        your coffee with one of our delicious sweet treats made by our very own baker. We look forward to 
        serving you at Taste & See Kapoy Coffee Shop!";



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
        <title>About</title>
        <!--- below is the connection of calling css to format the display of html -->
        <!--- we also used inline css -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- below is the website icon -->
        <link rel="icon" href="KapoyIcon.jpg">

        <!-- connecting the webstite to Emailjs using javascripit -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
            
            <!-- javascript emailjs integration-->
            <script type="text/javascript">
                //emailjs connection set up
                (function() {
                    //calling and initialization of emailjs from acc. ("user_sna6J7lSlKQdUwip55GLA");
                    emailjs.init("user_sna6J7lSlKQdUwip55GLA");
                         })();
            </script>
    </head>

    <body>
        <header>
            <!-- div area for the branding -->
            <div class="container">
                <div id="branding">
                                <h1 class="kaptitle2">Kapoy☕Coffee</h1>
                </div>
                    <script>
                        // created an object ot as "text" and chose a querySelector then locate the fancy class
                        const text2 = document.querySelector(".kaptitle2")
                        // created an object to convert the "text" container value that is read by the .textContent
                        const strText2 = text2.textContent;
                        // calling the "strText" value if the conversion is succesfull.
                        //console.log(strText)
            
                        // created an object to convert the string value to split and contain in the char value to a array 
                        const splitText2 = strText2.split("")
                        //checking of the split Text
                        //console.log(splitText)
            
                        text2.textContent=""; // set the "textContent" value to be empty 
            
                        for(let i=0; i < splitText2.length; i++) {
                            text2.innerHTML += "<span>"+splitText2[i]+"</span>";
                        }
                        let char2 = 0;
                        let timer2 = setInterval(onTick2,50);
            
                        function onTick2(){
                            const span = text2.querySelectorAll("span")[char2];
                            try{
                            span.classList.add('fade');
                            char2++
            
                            if(char2 === splitText2.length){
                                complete();
                                return
                                }
                            }
                                catch (e){

                                }
                            }
                    </script>
                            <!--- below is the navigation area -->
                            <nav>
                                <ul>
                                    <li ><a href="Main.php">Home</a>
                                    <li class="current"><a href="about.php">About</a>
                                    <li><a href="Orders.php">Orders</a>
                                </ul>
                                </nav>
                                </div>
                                </header>
                </div>

        </header>

        <section id="newsletter">
                    <div id="gmail2Email">
                        <!-- input area -->
                        <form>
                        <center><h3>Contact Us📧</h3></center>
                        <input required class="margin" type="text" id="user" placeholder="Username"   > <br>
                        <input required class="margin" type="text" id="email" placeholder="Your Email"   >     <br>
                        <!-- <input class="margin" type="text" id="msg" placeholder="Enter your Message"> <br>---> 
                            <center>    
                                <button onclick="sendMail()" class="button_1">Send Email</button>
                            </center>

                            <?php
                            //the subject
                            $sub = 
                            //the message
                            $msg = "Your message";
                            //recipient email here
                            $rec = "kapoycoffe62@gmail.com";
                            //send email
                            mail($rec,$sub,$msg);
                            
                            
                            ?>



                        </form>
                    </div>
        </section>
    </body>
</html>


    </body>

    <footer>
        <p>JheyDesign, Copyright&copy;2021 </p>
    </footer>
    
</html>