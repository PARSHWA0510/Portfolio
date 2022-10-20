<?php include 'send-mail.php'; ?>

<!DOCTYPE html>
<html land="en" dir="ltr">
<head>
    <meta charset="UTF-8">

    <title>contact-me</title>
    <link rel="stylesheet" type="text/css" href="./CSS/style.css">
    <link rel="stylesheet" type="text/css" href="./CSS/contact-me.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<div class="background">    

    <header>
        <div class="container">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="aboutme.html">ABOUT ME</a></li>
                    <li><a href="skills.html">SKILLS</a></li>
                    <li><a href="hobbies.html">HOBBIES</a></li>
                    <li><a href="achievement.html">ACHIEVEMENTS</a></li>
                    <li><a href="start-up.html">START UP IDEAS</a></li>
                    <li><a href="contact-me.php"><button class="button"> CONTACT</button></a></li>
                </ul>
         </div>
    </header>

    <?php echo $alert;?>
        <h1 class="font ">Contact Me</h1>
    <section class="contact">

        <div class ="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><img src="./images/address-icon.png" alt=""></div>
                    <div class="text">
                        <h3><b>Address</b></h3>
                        <p><b>407/37, Sardar Patel society,<br/> Near Sports Complex, <br/>GIDC Ankleshwar, 393002</b></p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><img src="./images/phone-icon.png" alt=""></div>
                    <div class="text">
                        <h3><b>Phone</b></h3>
                        <p><b> +91 9227590139</b>
                    </div>
                </div>
                
                <div class="box">
                    <div class="icon"><img src="https://static.thenounproject.com/png/3039384-200.png" alt=""></div>
                    <div class="text">
                        <h3><b>Email ID</b></h3>
                        <p><b><a href="mailto:mehtaparshwa.05@gmail.com?subject=Regarding+your+personal+website">mehtaparshwa.05@gmail.com
                        </a></b></p>
                    </div>
                </div>


            </div>
            <div class="contactForm">
                <form action=" " method="POST">
                    <h2>Get In Touch</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <br/><input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <br/><textarea name="message" required="required"></textarea>
                        <span>Type your message....</span>
                    </div>
                    <div class="inputBox">
                        <br/><input type="submit" name="submit" value="Send">
                    </div>
                </form>
            </div>
        
        </div>
    
    </section>
</div>

<!-- To prevent reloading of page when email is being sent -->
<script type="text/javascript">
         if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
         }
    </script>

</body>
</html>