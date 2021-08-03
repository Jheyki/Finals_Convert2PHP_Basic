<?php
    ini_set('max_execution_time', 0);

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

    $message_sent = false;
        if(isset($_POST['email']) && $_POST['email'] !='') {
 
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

                $userName = $_POST['name'];
                $userEmail = $_POST['email'];
                $messageSubject;// = $_POST['subject'];
                //$message = $_POST['message'];
                
                $messageSubject='Hi Kapoy☕Coffee Partner you got a New Email';
                $to = 'kapoycoffe62@gmail.com';
                $message = '';
                $body = '';
                
                $body .= "Hi Kapoy☕Coffee Partner!!\r\n";
                $body .= "You Got an Email from: ".$userName."\r\n";
                $body .= "Client Email: ".$userEmail."\r\n";
                $body .= "".$message."\r\n";
                $body .= "Best Wishes & God Bless";
                
                mail($to,$messageSubject,$body);
        
                $message_sent = true;
            }else{
                $invalid_class_name = "form-invalid";
            }


        }





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


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
                <script src="main.js"></script>


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

                    <center><h3>Contact Us📧</h3></center>
                    <?php 
                    if($message_sent==true):
                        $send ='Thank\'s for your Support☕'
                    ?>
                    <h4 style="text-align:center"><?php echo $send ?></h4>
                    <?php
                    else:
                    ?>
                                        <?php
                    endif;
                    ?>
                        

                    <form id="input" action="about.php" method="POST" style="float: initial;">

                        <input type="text" class="margin" id="name" name="name" placeholder="Username" required  size="30" maxlength="20"  ><br>
                        <input type="text"  class="margin  <?= $invalid_class_name ?? "" ?> " id="email" name="email" placeholder="@gmail.com" required  size="30" maxlength="30"  > <br>
                        <center>
                    <div>
                        <button class="button_1" type="submit">Send Message!</button>
                    </div>
                        </center>


                </form>
                                                <center>
                                        <h4>Contributors:</h4>
                                        <b>Honeylyn Togle</b><br>
                                        <b>Jerome S. Cortez</b>
                                                </center>
                </div>
                
                
                </div>
                     <div id="devs" >
                        <section style="text-align: center;">
                            <h2>☕Contributors☕</h2>
                            <img src="Honeylyn_Togle.jpg" height="25%" width="25%" style=" border-radius: 8px; " >
                            <img src="Cortez_Jerome.jpg" height="25%" width="25%" style=" border-radius: 8px; ">
                        </section>
                    </div>
        </section>
        <!-- tells about the Coffee brand --> 
        <article style="padding:20px;">
            <div style="margin: auto;">
                <h3>About Us</h3>
                <p style="text-align: justify;"><?php echo $About ?></p>       
            </div>
        </article>

    </body>

    <footer>
        <p>JheyDesign, Copyright&copy;2021 </p>
    </footer>
    
</html>