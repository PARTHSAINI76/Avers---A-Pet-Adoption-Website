<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donationsuccess.css">
    <title>Thank You For Donation</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./donationsuccess-img/logo.jpg" alt="the logo of avers">
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
                <li id ="howitworks" >How it works</li>
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
                <button id ="adopt-btn"><img src="./donationsuccess-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
            </div>
        </div>
    </header>
    
    <!-- Header Ends Here -->

    <!-- Thank you card -->

    <div class="thankyou-card-container">
        <div class="thankyou-card">
        <div class="icon"><img src="./donationsuccess-img/orange-success-tick.png" alt="" hieght="60px" width="60px"></div>
        <h1>Thank You for Your Donation!</h1>
        <p>Your generous contribution of <span id="donationAmount">$50.00</span> will help us provide care and find loving homes for animals in need.</p>
    
        <hr>
    
        <div class="info">
          <p><strong>Amount Donated:</strong> <span id="amount">$50.00</span></p>
          <p><strong>Transaction ID:</strong> <span id="transactionID">TXN1234567890</span></p>
        </div>
    
        <p>Your support makes a huge difference. We are incredibly grateful for your kindness.</p>
    
        <div class="buttons">
          <button class="social" id="shareBtn">🔗 Share on Social Media</button>
          <button class="home" id="homeBtn">🏠 Return to Homepage</button>
        </div>
      </div>
    </div>

  <!-- Thank You Card Ends Here -->
</body>
<script src="donationsuccess.js"></script>
</html>