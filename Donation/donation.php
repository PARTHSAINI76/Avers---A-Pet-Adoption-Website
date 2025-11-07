<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./donation.css">
    <title>Avers : The best site for Pet Adoption</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./donation-img/logo.jpg" alt="the logo of avers">
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
                <li id ="contact" >Contact</li>
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
                <button id ="adopt-btn"><img src="./donation-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
            </div>
        </div>
    </header>
    
    <!-- Header Ends Here -->

    <!-- Banner-1 -->
     <div class="donate-banner">
        <div class="banner-head">
            <img src="./donation-img/dog-left.png" alt="">
            <div class="banner1-text">
                <h1>Make a donation</h1>
                <p>Your kindness gives homeless pets a second chance.
                   Together, we can rescue, heal, and rehome.</p>
            </div>
            <img src="./donation-img/dog-right.png" alt="">
        </div>
    </div>
<!-- Donation Card -->

            <div class="donationCardContainer">
                <div class="donate-card">
                    <img src="./donation-img/Btn-paw.png" alt="">
                    <h3>$10</h3>
                    <button id="donate-btn1">Donate</button>
                </div>
                <div class="donate-card">
                    <img src="./donation-img/Btn-paw.png" alt="">
                    <h3>$20</h3>
                    <button id="donate-btn2">Donate</button>
                </div>
                <div class="donate-card">
                    <img src="./donation-img/Btn-paw.png" alt="">
                    <h3>$50</h3>
                    <button id="donate-btn3">Donate</button>
                </div>
                <div class="donate-card">
                    <img src="./donation-img/Btn-paw.png" alt="">
                    <h3>$100</h3>
                    <button id="donate-btn4">Donate</button>
                </div>
            </div>

    <!-- Donation Card Ends Here -->

    <!-- Donation Image Slider -->
     <div class="donation-image-slidercontainer">
       <div class="slider">
            <div class="slides" id="slides">
                <div class="slide"><img src="./donation-img/donation-slider(1).webp" alt="Slide 1"></div>
                <div class="slide"><img src="./donation-img/donation-slider(2).webp" alt="Slide 2"></div>
                <div class="slide"><img src="./donation-img/donation-slider(3).webp" alt="Slide 3"></div>
            </div>
        </div>
       
       <div class="dots" id="dots">
           <span class="dot active"></span>
           <span class="dot"></span>
           <span class="dot"></span>
        </div>
    </div>
  <!-- Donation Images Slider -->

  <!-- Banner-2 -->
   <div class="banner-2">
      <div class="banner-2-conatiner">
        <div class="banner-2-text">
            <h3>Lets Donate To Save More Dogs</h3>
            <p>Every day, countless dogs are abandoned, neglected, or left without a safe place to call home. Your donation can make a life-changing difference — providing food, shelter, medical care, and the chance for a loving forever family.</p>
            <div class="color-container">
                <hr>
                <div class="color-container-text">
                    <span>“Saving one dog will not change the world, but surely for that one dog, the world will change forever.”</span>
                    <h5>Karen Davison</h5>
                    <span>Author</span>
                </div>
            </div>
        </div>
        <div class="banner-2-img">
            <img src="./donation-img/banner-2-img.jpg" alt="">
        </div>
      </div>
    </div>

    <!-- Banner-2 Ends Here -->

    <!-- Footer -->
     <div class="footer">
            <div class="footer-box">
                <div class="footer-logo">
             <img src="./donation-img/logo-bgremove.png" alt="the logo of avers">
             <span>
                <div class="footer-logo-name">
                    <h3>Avers</h3>
                    <p>Dog and cat adoption</p>
                </div>
            </span>
        </div>   
        <div class="aver-details">
            <div class="location">
                <img src="./donation-img/location-icon.png" alt="">
                <p>Xyz Street , Xyz city , India</p>
            </div>
            <div class="aver-call">
                <img src="./donation-img/call-icon.png" alt="">
                <p>(+91) 12345 67891</p>
                </div>
                <div class="mail">
                    <img src="./donation-img/mail-icon.png" alt="">
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
<script src="donation.js"></script>
</html>