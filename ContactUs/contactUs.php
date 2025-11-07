<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contactUs.css">
    <title>Avers : The best site for Pet Adoption</title>
</head>
<body>

<!-- Header Starts Here -->
    <header>
        <div class="logo">
            <img src="./ContactUs-img/logo.jpg" alt="the logo of avers">
            <span>
                <div class="logo-name">
                    <h3>Avers</h3>
                    <p>Dog and cat adoption</p>
                </div>
            </span>
        </div>
        
        <div class="navbar">
            <ul>
                <li id ="home">Home</li>
                <select id="pet-select">
                    <option value="">Adopt</option>
                    <option value="dogBtn">Dog</option>
                    <option value="catBtn">Cat</option>
                </select>
                <li id ="donation" >Donation</li>
                <li id ="volunteer-btn">Volunteer</li>
                <select id="pages-select">
                    <option value="">Pages</option>
                    <option value="AboutUs">About Us</option>
                    <option value="FAQ">FAQ's</option>
                </select>
            </ul>
        </div>
        
        <div class="contacts">
            <div class="call">
                <h4>Free consultation</h4>
                <span>(+91) 90*** *****</span>
            </div>
            <div class="adopt-btn">
                <button id ="adopt-btn"><img src="./ContactUs-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
            </div>
        </div>
    </header>

    <!-- Header Ends Here -->

<!-- PHP Section For Database Connections -->

    <?php

// Getting Data From The Form //

       if($_SERVER['REQUEST_METHOD'] == 'POST'){       
           $firstName = $_POST['fname'];
           $lastName = $_POST['lname']; 
           $email = $_POST['email']; 
           $subject = $_POST['subject']; 
           $message = $_POST['message']; 

    // Connecting File to Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "avers";

    
    $connection = mysqli_connect($servername,$username,$password,$database);

    if($connection){
        // $formTable = "CREATE TABLE `contactusdetails` ( `userNo` INT(5) NOT NULL AUTO_INCREMENT , `firstName` VARCHAR(30) NOT NULL , `lastName` VARCHAR(40) NOT NULL , `eMail` VARCHAR(50) NOT NULL , `subject` VARCHAR(100) NOT NULL , `message` VARCHAR(500) NOT NULL , PRIMARY KEY(`userNo`) );" ;

        // $formTableResult = mysqli_query($connection,$formTable); 

        $insertQuery = "INSERT INTO `contactusdetails` (`firstName`, `lastName`, `eMail`, `subject`, `message`) VALUES ('$firstName', '$lastName', '$email', '$subject', '$message');";
        
        $insertionResult = mysqli_query($connection,$insertQuery);

        if($insertionResult){
            header("Location: ./contactUssuccess/contactUssuccess.php");
            exit();
        }
    }
    }    
    ?>

<!-- PHP Section Ends Here -->
 
    <!-- Contact Us Section -->
     <div class="contactUs-container">
        <div class="contactUs-form-conatiner">
            <div class="contactUs-form">
                <h1>Contact Us</h1>
                <p>Have questions about adopting a furry friend? Our team is here to guide you through every step of the process. Reach out today and let’s find your perfect companion together.</p>
                <form action="/AVERS/ContactUs/contactUs.php" method ="post">
                    <div class="form-details">
                        <div class="name-addr">
                            <label>First Name</label>
                            <input type="text" placeholder="Ex. ABC" name="fname" required>
                            <label>Email Address</label>
                            <input type="email" placeholder="abc@mail.com" name="email" required>
                        </div>
                        <div class="lname-subject">
                            <label>Last Name</label>
                            <input type="text" placeholder="Ex. BCD" name="lname" required>
                            <label>Subject</label>
                            <input type="text" placeholder="What can we help?" name="subject" required>
                        </div>
                    </div>
                    <label id="message-label">Message</label>
                    <textarea name="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
        <div class="contactUs-info">
            <div class="contactus-text">
                <div class="addr-email">
                <h4>Address</h4>
                <p>123 Pet Lane, Xyz City, Country</p>
                <h4>Email</h4>
                <p>abc@gmail.com</p>
                </div>
                <div class="phone-follow">
                    <h4>Phone</h4>
                    <p>(+91) 90*** *****</p>
                    <h4>Follow Us</h4>
                    <div class="followUs-img">
                        <img src="./ContactUs-img/followUs-img1.png" alt="facebook">
                        <img src="./ContactUs-img/followUs-img2.png" alt="twitter">
                        <img src="./ContactUs-img/followUs-img3.png" alt="instagram">
                    </div>
                </div>
            </div>
            <div class="map-loc-container">
                <div class="map-card">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27949.10398764612!2d76.59271937431643!3d28.8793836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d850031b0207b%3A0x3759fea554777f06!2sDog%20NGO%20Rohtak!5e0!3m2!1sen!2sin!4v1759085537598!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- ContactUs Section Ends Here -->

    <!-- FAQ Section Starts Here -->
     <div class="faq-area">
        <div class="faq-container">
            <h1>Frequently asked questions</h1>
            <p class="subtitle">Get helpful answers about adopting, caring for, and giving a loving home to your new furry friend.</p>
            
            <div class="faq-item">
                <button class="faq-question">What is the adoption fee?</button>
                <div class="faq-answer">
                    <p>The adoption fees depends on the particular breed of the pet</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">What is the adoption process?</button>
                <div class="faq-answer">
                    <p>Just select the pet and fill the adoption form.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question">When are we open for adoptions / visitors?</button>
                <div class="faq-answer">
                    <p>Our visiting hours are from 10 AM to 6 PM daily.</p>
                </div>
            </div>
      
          <div class="faq-item">
            <button class="faq-question">Can we come see the dogs?</button>
            <div class="faq-answer">
                <p>Yes, you can visit and see the dogs during open hours.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">Can I come play with the dogs?</button>
            <div class="faq-answer">
                <p>Absolutely! We encourage interaction before adoption.</p>
            </div>
        </div>
        
        <div class="faq-item">
            <button class="faq-question">How many dogs do you have?</button>
            <div class="faq-answer">
                <p>We currently have over 10 adoptable dogs.</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Ends Here -->

<hr>

<!-- Footer -->
        <div class="footer">
            <div class="footer-box">
                <div class="footer-logo">
             <img src="./ContactUs-img/logo-bgremove.png" alt="the logo of avers">
             <span>
                <div class="footer-logo-name">
                    <h3>Avers</h3>
                    <p>Dog and cat adoption</p>
                </div>
            </span>
        </div>   
        <div class="aver-details">
            <div class="location">
                <img src="./ContactUs-img/location-icon.png" alt="">
                <p>Xyz Street , Xyz city , India</p>
            </div>
            <div class="aver-call">
                <img src="./ContactUs-img/call-icon.png" alt="">
                <p>(+91) 12345 67891</p>
                </div>
                <div class="mail">
                    <img src="./ContactUs-img/mail-icon.png" alt="">
                    <p>Avers@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="footer-box">
            <div class="navigation">
                <h3>Navigation</h3>
                <ul>
                    <li id="home-link">Home</li>
                    <li id="donation-btn">Donation</li>
                    <li id = "dog-list-btn">Dog List</li>
                    <li id= "cat-list-btn">Cat List</li>
                </ul>
            </div>
        </div>
        <div class="footer-box">
            <div class="Aver-business">
                <h3>Our Business</h3>
                <ul>
                    <li id="aboutus">About Us</li>
                    <li id="our-team-link">Our Team</li>
                    <li id="FAQ-link">FAQ's</li>
                    <li id="contact-link">Contact</li>
                </ul>
            </div>
        </div>
        <div class="footer-box">
            <div class="Aver-info">
                <h3>Information</h3>
                <ul>
                    <li id = "Tnc-link">Terms & Conditions</li>
                    <li id = "privacypolicy-link">Privacy Policy</li>
                    <li id = "Blog-link">Blog</li>
                    <li id = "Sitemap-link">Sitemap</li>
                </div>
            </div>
        </div>

        <!-- Footer Ends Here -->
</body>
<script src="contactUs.js"></script>
</html>