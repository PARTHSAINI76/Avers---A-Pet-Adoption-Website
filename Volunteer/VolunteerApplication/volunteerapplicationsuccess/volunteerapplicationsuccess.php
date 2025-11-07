<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="volunteerapplicationsuccess.css">
    <title>Thanks For Submitting Application</title>
</head>
<body>
    <!-- Header  -->
    
    <header>
        <div class="logo">
            <img src="./volunteerapplicationsuccess-img/logo.jpg" alt="the logo of avers">
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
                <li id="volunteer-btn">Volunteer</li>
                <select name="" id="">
                    <option value="">Pages</option>
                    <option value="">ABC</option>
                    <option value="">BCD</option>
                </select>
            </ul>
        </div>
        
        <div class="contacts">
            <div class="call">
                <h4>Free consultation</h4>
                <span>(+91) 90*** *****</span>
            </div>
            <div class="adopt-btn">
                <button id="adopt-btn"><img src="./volunteerapplicationsuccess-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
            </div>
        </div>
    </header>
    
    <!-- Header Ends Here -->

    <!-- Thank You Section -->

    <div class="thankyou">
        
    <h1>Thank you for your application!</h1>
  <p>We've received your application and will be in touch shortly.<br>
     You will be redirected to the homepage in <span id="seconds">5</span> seconds.</p>

  <div class="countdown">
    <div class="time-box">
      <span>00</span>
      <div class="time-label">Hours</div>
    </div>
    <div class="time-box">
      <span>00</span>
      <div class="time-label">Minutes</div>
    </div>
    <div class="time-box seconds">
      <span id="secondBox">05</span>
      <div class="time-label">Seconds</div>
    </div>
  </div>

  <div class="buttons">
    <button class="btn btn-primary" onclick="window.location.href='/AVERS/index.php'">Explore our website</button>
    <button class="btn btn-secondary" onclick="window.history.back()">Go back</button>
  </div>
    </div>

  <!-- Thank You Section Ends Here -->
</body>
<script src="./volunteerapplicationsuccess.js"></script>
</html>