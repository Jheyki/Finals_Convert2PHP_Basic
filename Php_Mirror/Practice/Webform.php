<?php 

echo '<pre>';
    print_r($_POST);
echo '</pre>';

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];

$messageSubject='Hi Kapoy☕Partner you got a New Client';
$to = 'kapoycoffe62@gmail.com';
$message = '';
$body = '';

$body .= "Hi Kapoy☕Partner!!\r\n";
$body .= "You Got an Email from: ".$userName."\r\n";
$body .= "Client Email: ".$userEmail."\r\n";
$body .= "".$message."\r\n";
$body .= "Best Wishe\'s & God Bless";

mail($to,$messageSubject,$body);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
</body>

</html>