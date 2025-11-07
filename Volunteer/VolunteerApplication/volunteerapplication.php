<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="volunteerapplication.css">
    <title>Avers : The best site for Pet Adoption</title>
</head>
<body>
     <!-- Header  -->
    
    <header>
        <div class="logo">
            <img src="./volunteerapplication-img/logo.jpg" alt="the logo of avers">
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
                <li id ="donation">Donation</li>
                <li id="volunteer-btn">Volunteer</li>
                <select name="" id="pages-select">
                    <option value="">Pages</option>
                    <option value="AboutUs">AboutUs</option>
                    <option value="contact">Contact Us</option>
                    <option value="FAQ">FAQ</option>
                </select>
            </ul>
        </div>
        
        <div class="contacts">
            <div class="call">
                <h4>Free consultation</h4>
                <span>(+91) 90*** *****</span>
            </div>
            <div class="adopt-btn">
                <button id="adopt-btn"><img src="./volunteerapplication-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
            </div>
        </div>
    </header>
    
    <!-- Header Ends Here -->

    <!-- Banner-1 -->
     <div class="banner-1">
        <h1>Volunteer Application</h1>
        <p>The Volunteer Application lets animal lovers join our pet adoption team and support rescued dogs and cats. Fill out the form to help with care, events, and daily activities that bring pets closer to their forever homes.</p>
     </div>

     <!-- Banner-1 Ends Here -->

     
     <?php

// Getting Data From The Form //

if($_SERVER['REQUEST_METHOD'] == "POST"){       
    
    $firstName = $_POST['firstName'];
    $eMail = $_POST['eMail'];
    $lastName = $_POST['lastName'];
    $phoneNo = $_POST['phNo'];
    $address  = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $interestMessage = $_POST['intrst_message'];
    $experienceMessage = $_POST['exp_message'];
    $AvailMessage = $_POST['avail_message'];

    // Connecting File to Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "avers";

    
    $connection = mysqli_connect($servername,$username,$password,$database);

    if($connection){
        // $formTable = "CREATE TABLE `volunteerapplication` (`firstName` VARCHAR(20) NOT NULL , `eMail` VARCHAR(60) NOT NULL , `lastName` VARCHAR(20) NOT NULL , `phoneNo` VARCHAR(11) NOT NULL , `address` VARCHAR(100) NOT NULL ,`city` VARCHAR(50) NOT NULL ,`state` VARCHAR(50) NOT NULL, `zipcode` VARCHAR(7) NOT NULL , `interestMessage` VARCHAR(200) NOT NULL , `experienceMessage` VARCHAR(200) NOT NULL , `availMessage` VARCHAR(100) NOT NULL );" ;

        // $formTableResult = mysqli_query($connection,$formTable); 

        $insertQuery = "INSERT INTO `volunteerapplication` (`firstName`, `eMail`, `lastName`, `phoneNo`, `address` ,`city`,`state` , `zipcode` ,`interestMessage` , `experienceMessage`,`availMessage`) VALUES ('$firstName', '$eMail', '$lastName', '$phoneNo', '$address' , '$city' , '$state' , '$zipcode' , '$interestMessage' ,'$experienceMessage' , '$AvailMessage');";
        
        $insertionResult = mysqli_query($connection,$insertQuery);

        if($insertionResult){
            header("Location: ./volunteerapplicationsuccess/volunteerapplicationsuccess.php");
            exit();
        }
    }
    }    
    ?>
     <!-- Volunteer Application Form -->

     <div class="application-form-div">
        <div class="application-form-container">
            <form action="./volunteerapplication.php" method="post" id="volunteerForm">
                <div class="fn-em-ln-ph">
                    <div class="fn-email">
                        <label for="firstName">First Name</label>
                        <input type="text" placeholder="Enter your first name" name="firstName" required>
                        
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email" name="eMail" required>
                    </div>
                    <div class="ln-phNo">
                        <label for="lastName">Last Name</label>
                        <input type="text" placeholder="Enter your last name" name="lastName" required>
                        <label for="Phno.">Phone Number</label>
                        <input type="text" placeholder="Enter your phone number" name="phNo" required>
                    </div>
                </div>
                <div class="address">
                    <label for="address">Address</label>
                    <input type="text" placeholder="Enter your address" name="address" required>  
                </div>
                <div class="location-details">
                    <div class="city">
                        <label for="City">City</label>
                        <input type="text" placeholder="Enter your city" name="city" required>  
                    </div>
                    <div class="state">
                        <label for="state">State</label>
                        <input type="text" placeholder="Enter your state" name="state" required>  
                    </div>
                    <div class="zipcode">
                        <label for="zipcode">Zipcode</label>
                        <input type="text" placeholder="Enter your zipcode" name="zipcode" required>  
                    </div>  
                </div>
                <div class="vlntr-interest">
                    <label for="vlntr_interest">Why are you interested in volunteering?</label>
                    <textarea name="intrst_message" cols="30" rows="10" placeholder="Please tell us why you would like to volunteer with us." required></textarea>  
                </div>
                <div class="vlntr-experience">
                    <label for="vlntr_experience">What experience do you have with animals?</label>
                    <textarea name="exp_message" cols="30" rows="10" placeholder="Please describe any experience you have with animals." required></textarea>  
                </div>
                <div class="vlntr-available">
                    <label for="vlntr_available">What days and times are you available for volunteer?</label>
                    <textarea name="avail_message" cols="30" rows="10" placeholder="Please let us know your availability." required></textarea>  
                </div>
                <button class="submit-btn" id="submit">Submit Application</button>
            </form>
        </div>
     </div>

     <!-- Volunteer Application Form Ends Here -->

     <hr>
     <!-- Footer -->
        <div class="footer">
            <div class="footer-box">
                <div class="footer-logo">
             <img src="./volunteerapplication-img/logo-bgremove.png" alt="the logo of avers">
             <span>
                <div class="footer-logo-name">
                    <h3>Avers</h3>
                    <p>Dog and cat adoption</p>
                </div>
            </span>
        </div>   
        <div class="aver-details">
            <div class="location">
                <img src="./volunteerapplication-img/location-icon.png" alt="">
                <p>Xyz Street , Xyz city , India</p>
            </div>
            <div class="aver-call">
                <img src="./volunteerapplication-img/call-icon.png" alt="">
                <p>(+91) 12345 67891</p>
                </div>
                <div class="mail">
                    <img src="./volunteerapplication-img/mail-icon.png" alt="">
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
<script src="./volunteerapplication.js"></script>
</html>