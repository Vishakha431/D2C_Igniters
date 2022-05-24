<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Contact Us </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>


        <!--contact-->
        <section class="contact">
            <div class="content">
                <h2> Contact Us </h2>
                <p> "D2C Igniters Club": We are the Igniters, where talent meets the right platform. <br>Send your queries if any!</p>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="glyphicon glyphicon-map-marker" ></i></div>
                        <div class="text">
                            <h3> Address </h3>
                            <p>RMD Sinhgad School of Engineering, Warje, Pune</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="glyphicon glyphicon-envelope"></i></div>
                        <div class="text">
                            <h3> Email </h3>
                            <p> d2cigniters@gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="glyphicon glyphicon-earphone"></i></div>
                        <div class="text">
                            <h3> Phone </h3>
                            <p>9552342360</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="process.php" method="post">
                        <h2> Send Message</h2>
                        <div class="inputBox">
                            <input type ="text" name ="fname" required="required">
                            <span> Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type ="text" name ="email" required="required">
                            <span> Email</span>
                        </div>
                        <div class="inputBox">
                            <input type ="tel" name ="mobile" required="required">
                            <span> Mobile</span>
                        </div>
                        <div class="inputBox">
                            <textarea name = "message" required="required"></textarea>
                            <span> Type your Message...</span>
                        </div>
                        <div class="inputBox">
                            <input type ="submit" name =" " value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>