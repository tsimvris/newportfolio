<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "tsimvris@gmail.com";

mail($recipient, $name, $message, $mailheader)
or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="publisher" content="Petros Tsimvris" />
    <meta property="DC.rights" content="Alle Rechte liegen beim Autor" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Petros Tsimvris</title>
    <script  src="https://code.jquery.com/jquery-1.12.4.min.js"  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="  crossorigin="anonymous"></script>

</head>

<body>
<!--HEADER-------------------------------------------------->
    <header>

        <nav id="main-nav">

            <i class="fa fa-bars" aria-hidden="true"></i>

            <ul class="open">
                <a href="#home"><li>Home</li></a>
                <a href="#about"><li>About</li></a>
                <a href="#work"><li>Work</li></a>
                <a href="#contact"><li>Contact</li></a>
                <a href='https://www.linkedin.com/in/petros-tsimvris/' target="blank"> <li><i class="fa fa-linkedin-square"></i> LinkedIn</li></a>
                <a href='https://github.com/tsimvris' target="blank"><li><i class="fa fa-github"></i> GitHub</li></a>
            </ul>
        </nav>
    </header>



    

<!--Contact-------------------------------------------------->

    <section id="contact">
        <h3 class="aboutme">Thank you for contacting me.<br> I will get back to you as soon as possible!
        </h3>
        <hr>
        <p class="black">Go back to the <a href="index.html">homepage</a>.</p>
        
    </section>
   


<!--FOOTER-------------------------------------------------->

    <footer id="down">
        <p>
            &copy; 2021 - 2022 Petros Tsimvris
        </p>
    </footer>

    <script src="js/mobile-menu.js"></script>
</body>

</html>

';
?>