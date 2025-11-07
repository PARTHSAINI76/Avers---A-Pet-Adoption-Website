<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donationpayment.css">
    <title>Avers : The best site for Pet Adoption</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="./donationpayment-img/logo.jpg" alt="the logo of avers">
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
                <li id ="contactUs" >Contact Us</li>
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
                <button id ="adopt-btn"><img src="./donationpayment-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
            </div>
        </div>
    </header>
    
    <!-- Header Ends Here -->

    <!-- Banner-1 -->

    <div class="paymentdiv">
        <div class="donation-heading">
             <h1>Make a difference</h1>
             <p>Your donation will help us provide food, shelter, and medical care to animals in need. Every contribution, no matter the size, makes a significant impact.</p>
        </div>
    </div>

    <!-- Banner-1 Ends Here -->
    
    <?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){      
    
    $donationAmount = $_POST['donationAmount'];
    $paymentOption = $_POST['paymentOption'];
    $cardNumber = $_POST['cardNumber'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['CVV'];
    $cardUserName = $_POST['cardUserName'];
    $billingAddress = $_POST['billingAddress'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    
    // Connecting File to Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "avers";

    
    $connection = mysqli_connect($servername,$username,$password,$database);
    
        if($connection){

//         // $formTable = "CREATE TABLE `donationpayment`(`donationAmount` VARCHAR(50) NOT NULL , `paymentOption` VARCHAR(50) NOT NULL , `cardNumber` VARCHAR(17) NOT NULL , `expiryDate` VARCHAR(5) NOT NULL , `CVV` VARCHAR(4) NOT NULL, `cardUserName` VARCHAR(50) NOT NULL,`billingAddress` VARCHAR(50) NOT NULL , `city` VARCHAR(30) NOT NULL , `state` VARCHAR(30) NOT NULL, `zipcode` VARCHAR(7) NOT NULL); ";

        $insertQuery = "INSERT INTO `donationpayment` (`donationAmount`, `paymentOption`, `cardNumber`, `expiryDate`, `CVV`, `cardUserName` , `billingAddress` , `city` , `state` , `zipcode`) VALUES ('$donationAmount', '$paymentOption', '$cardNumber', '$expiryDate', '$cvv' , '$cardUserName' , '$billingAddress' , '$city' , '$state' , '$zipcode');";
        
        $insertionResult = mysqli_query($connection,$insertQuery);

        if($insertionResult){
            header("Location: ./DonationPaymentSuccess/donationsuccess.php");
            exit();
        }
    }
    }    
    ?>
    <!-- Payment Section -->

         <div class="form-area">
            <form id="donationForm" action="" method="POST">
               <label>Donation amount</label>
               <select id="amount" name="donationAmount">
                 <option value="$10"> $10 - Provides a warm bed </option>
                 <option value="$20"> $20 - Provides Health Facilities </option>
                 <option value="$50"> $50 - Covers vaccinations </option>
                 <option value="$100"> $100 - Provides food and shelter </option>
               </select>
           
               <label>Payment method</label>
               <select id="payment" name="paymentOption">
                 <option value="credit">Credit Card</option>
                 <option value="debit">Debit Card</option>
                 <option value="paypal">PayPal</option>
               </select>

               <hr id="hr-ruler">

               <label id="Bill-info">Billing Information</label>
           
               <label>Card number</label>
               <input type="text" id="cardNumber" name="cardNumber" placeholder="0000 0000 0000 0000" maxlength="19" required />
           
               <div class="row">
                <span>
                    <label>Expiry date</label>
                     <input type="text" id="expiry" name="expiryDate" placeholder="MM/YY" maxlength="5" required />
                </span>
                <span>
                    <label>CVV</label>
                    <input type="text" id="cvv" name="CVV" placeholder="123" maxlength="3" required />
                </span>
               </div>

               <label>Name on card</label>
               <input type="text" id="cardName" name="cardUserName" placeholder="Enter name on card" required />

               <label>Billing address</label>
               <input type="text" id="address" name="billingAddress" placeholder="Enter billing address" required />

               <div class="row">
                <span>
                    <label for="City">City</label>
                     <input type="text" id="city" name="city" placeholder="Enter city" required />
                </span>
                <span id="state-select">
                    <label>State</label>
                    <select id="state" name="state">
                      <option value="">Select state</option>
                      <option> Andhra Pradesh</option>
                      <option>Arunachal Pradesh</option>
                      <option>Assam</option>
                      <option>Bihar</option>
                      <option>Chhattisgarh</option>
                      <option>Goa</option>
                      <option>Gujarat</option>
                      <option>Haryana</option>
                      <option>Himachal Pradesh</option>
                      <option>Jharkhand</option>
                      <option>Karnataka</option>
                      <option>Kerala</option>
                      <option>Madhya Pradesh</option>
                      <option>Maharashtra</option>
                      <option>Manipur</option>
                      <option>Meghalaya</option>
                      <option>Mizoram</option>
                      <option>Nagaland</option>
                      <option>Odisha</option>
                      <option>Punjab</option>
                      <option>Rajasthan</option>
                      <option>Sikkim</option>
                      <option>Tamil Nadu</option>
                      <option>Telangana</option>
                      <option>Tripura</option>
                      <option>Uttar Pradesh</option>
                      <option>Uttarakhand</option>
                      <option>West Bengal</option>
                    </select>
                </span>
                 <span>
                    <label>Zipcode</label>
                     <input type="text" id="zip" name="zipcode" placeholder="Enter zip code" maxlength="6" required />
                 </span>
               </div>
           
               <button type ="submit">Donate</button>
            </form>
         </div>
</body>
<script src="donationpayment.js"></script>
</html>