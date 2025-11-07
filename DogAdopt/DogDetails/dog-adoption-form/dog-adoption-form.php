<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dog-adoption-form.css">
    <title>Avers : The best site for Pet Adoption</title>
</head>
<body>
     <!-- Header  -->
        
        <header>
            <div class="logo">
                <img src="./dog-adoption-form-img/logo.jpg" alt="the logo of avers">
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
                <select name="" id="pet-select">
                    <option value="">Adopt</option>
                    <option value="dogBtn">Dog</option>
                    <option value="catBtn">Cat</option>
                </select>
                <li id ="contactUs">Contact Us</li>
                <li id="volunteer-btn">Volunteer</li>
                <select id="pages-select">
                    <option value="">Pages</option>
                    <option value="AboutUs">About Us</option>
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
                <button id="adopt-btn"><img src="./Dog-adoption-form-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
            </div>
        </div>
    </header>
    
    <!-- Header Ends Here -->     
    
<!-- Php Section Starts Here -->

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "avers";
  
  $conn = mysqli_connect($servername,$username,$password,$database);

  if(!$conn){
    echo'error';
  }else{
    echo'connected';
  }

  $fullName = $_POST['fullName'];
  $eMail = $_POST['eMail'];
  $phoneNo = $_POST['phoneNo'];
  $curAddress = $_POST['curAddress'];
  $dogName = $_POST['dogName'];
  $dogColor = $_POST['dogColor'];
  $dogSex = $_POST['dogSex'];
  $dogAge = $_POST['dogAge'];
  $residenceType = $_POST['residenceType'];
  $adultNo = $_POST['adultNo'];
  $childrenNo = $_POST['childrenNo'];
  $experience = $_POST['experience'];
  $expDetail = $_POST['expDetail'];
  $interestDetail = $_POST['interestDetail'];
  $carePlan = $_POST['carePlan'];

  if($conn){
    $insertQuery = "INSERT INTO `dogadoptionformdetails` (`fullName`, `eMail`, `phoneNo`, `curAddress`, `dogName` , `dogColor` , `dogSex` , `dogAge` , `residenceType` , `adultNo` ,`childrenNo` , `experience` , `expDetail` , `interestDetail` , `carePlan`) VALUES ('$fullName', '$eMail', '$phoneNo', '$curAddress', '$dogName' , '$dogColor' , '$dogSex' , '$dogAge' , '$residenceType' , '$adultNo' , '$childrenNo' , '$experience' , '$expDetail' , '$interestDetail' , '$carePlan');"; 

    $insertionResult = mysqli_query($conn,$insertQuery);
    if($insertionResult){
          header("Location: ./dogadoptionformsuccess/dogadoptionformsuccess.php");
          exit();
      }
  }
        

      }
?>

<!-- PHP Section Ends Here -->


<!-- Application Form -->

<div class="container">
    <h1>Adoption Application for Dog</h1>
    <p class="subtitle">Thank you for your interest in giving pet a forever home.</p>

    <form id="adoptionForm" action="./dog-adoption-form.php" method = "post">
      <h2>Personal Information</h2>
      <div class="row">
        <div>
          <label>Full Name</label>
          <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
        </div>
        <div>
          <label>Email Address</label>
          <input type="email" id="email" name="eMail" placeholder="Enter your email address" required>
        </div>
      </div>

      <div class="row">
        <div>
          <label>Phone Number</label>
          <input type="tel" id="phone" name="phoneNo" placeholder="Enter your phone number" required>
        </div>
        <div>
          <label>Current Address</label>
          <input type="text" id="address" name="curAddress" placeholder="Enter your current address" required>
        </div>
      </div>

      <h2>Dog Information</h2>
      <div class="row">
        <div>
          <label>Dog Name</label>
          <input type="text" id="dogName" name="dogName" placeholder="Enter full name of dog" required>
        </div>
        <div>
          <label>Dog Color</label>
          <input type="text" id="dogcolor" name="dogColor" placeholder="Enter dog's color" required>
        </div>
      </div>

      <div class="row">
        <div>
          <label>Sex</label>
          <input type="text" id="sex" name="dogSex" placeholder="Enter your dog sex type" required>
        </div>
        <div>
          <label>Age</label>
          <input type="text" id="age" name="dogAge" placeholder="Enter which age of dog you want?" required>
        </div>
      </div>

      <h2>Living Situation</h2>
      <div class="row">
        <div>
          <label>Type of Residence</label>
          <select id="residenceType" name="residenceType" required>
            <option value="">Select your residence type</option>
            <option>House</option>
            <option>Apartment</option>
            <option>Farm</option>
            <option>Other</option>
          </select>
        </div>
        <div>
          <label>Number of Adults</label>
          <input type="number" id="adults" name="adultNo" placeholder="Enter number of adults" required>
        </div>
      </div>

      <div class="row">
        <div>
          <label>Number of Children</label>
          <input type="number" id="children" name="childrenNo" placeholder="Enter number of children">
        </div>
      </div>

      <h2>Previous Pet Ownership</h2>
      <label>Do you have previous experience with dogs?</label>
      <select id="experience" name="experience" required>
        <option value="">Select an option</option>
        <option>Yes</option>
        <option>No</option>
      </select>

      <label>If yes, please describe your experience</label>
      <textarea id="expDetails" name="expDetail" placeholder="Describe your experience with dogs"></textarea>

      <h2>Questions About Pet</h2>
      <label>Why are you interested in adopting this dog?</label>
      <textarea id="reason" name="interestDetail" placeholder="Explain your interest in adopting Max" required></textarea>

      <label>How do you plan to care for this dog?</label>
      <textarea id="carePlan" name="carePlan" placeholder="Describe your care plan for Max" required></textarea>

      <h2>Declaration</h2>
      <div class="checkbox">
        <input type="checkbox" id="agree" name="declaration" required>
        <h4>I confirm that the information provided is accurate and complete.</h4>
      </div>

      <button type="submit">Submit Application</button>
    </form>
  </div>
</body>
<script src="dog-adoption-form.js"></script>
</html>