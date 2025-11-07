<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cat-adoption-form.css">
    <title>Avers : The best site for Pet Adoption</title>
</head>
<body>
     <!-- Header  -->
        
        <header>
            <div class="logo">
                <img src="./cat-adoption-form-img/logo.jpg" alt="the logo of avers">
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
                <li id ="howitworks" >How it works</li>
                <li id="volunteer-btn">Volunteer</li>
                <select id="pages-select">
                    <option value="">Pages</option>
                    <option value="AboutUs">AboutUs</option>
                    <option value="FAQ">FAQ</option>
                    <option value="contact">Contact Us</option>
                </select>
            </ul>
        </div>
        
        <div class="contacts">
            <div class="call">
                <h4>Free consultation</h4>
                <span>(+91) 90*** *****</span>
            </div>
            <div class="adopt-btn">
                <button id="adopt-btn"><img src="./cat-adoption-form-img/Btn-paw.png" alt="" height = 28px width = 28px>Adopt Here</button>
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
  $catName = $_POST['catName'];
  $catColor = $_POST['catColor'];
  $catSex = $_POST['catSex'];
  $catAge = $_POST['catAge'];
  $residenceType = $_POST['residenceType'];
  $adultNo = $_POST['adultNo'];
  $childrenNo = $_POST['childrenNo'];
  $experience = $_POST['experience'];
  $expDetail = $_POST['expDetail'];
  $interestDetail = $_POST['interestDetail'];
  $carePlan = $_POST['carePlan'];

  if($conn){
    $insertQuery = "INSERT INTO `catadoptionformdetails` (`fullName`, `eMail`, `phoneNo`, `curAddress`, `catName` , `catColor` , `catSex` , `catAge` , `residenceType` , `adultNo` ,`childrenNo` , `experience` , `expDetail` , `interestDetail` , `carePlan`) VALUES ('$fullName', '$eMail', '$phoneNo', '$curAddress', '$catName' , '$catColor' , '$catSex' , '$catAge' , '$residenceType' , '$adultNo' , '$childrenNo' , '$experience' , '$expDetail' , '$interestDetail' , '$carePlan');"; 

    $insertionResult = mysqli_query($conn,$insertQuery);
    if($insertionResult){
          header("Location: ./catadoptionformsuccess/catadoptionformsuccess.php");
          exit();
      }
  }
        

      }
?>

<!-- PHP Section Ends Here -->


<!-- Application Form -->

<div class="container">
    <h1>Adoption Application for Cat</h1>
    <p class="subtitle">Thank you for your interest in giving pet a forever home.</p>

    <form id="adoptionForm" action="/AVERS/CatAdopt/cat-adoption-form/cat-adoption-form.php" method ="post">
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

      <h2>Cat Information</h2>
      <div class="row">
        <div>
          <label>Cat Name</label>
          <input type="text" id="dogName" name="catName" placeholder="Enter full name of cat" required>
        </div>
        <div>
          <label>Cat Color</label>
          <input type="text" id="dogcolor" name="catColor" placeholder="Enter cat's color" required>
        </div>
      </div>

      <div class="row">
        <div>
          <label>Sex</label>
          <input type="text" id="sex" name="catSex" placeholder="Enter your cat sex type" required>
        </div>
        <div>
          <label>Age</label>
          <input type="text" id="age" name="catAge" placeholder="Enter which age of cat you want?" required>
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
      <label>Do you have previous experience with cats?</label>
      <select id="experience" name="experience" required>
        <option value="">Select an option</option>
        <option>Yes</option>
        <option>No</option>
      </select>

      <label>If yes, please describe your experience</label>
      <textarea id="expDetails" name="expDetail" placeholder="Describe your experience with cats"></textarea>

      <h2>Questions About Pet</h2>
      <label>Why are you interested in adopting this cat?</label>
      <textarea id="reason" name="interestDetail" placeholder="Explain your interest in adopting this cat" required></textarea>

      <label>How do you plan to care for this cat?</label>
      <textarea id="carePlan" name="carePlan" placeholder="Describe your care plan for this cat" required></textarea>

      <h2>Declaration</h2>
      <div class="checkbox">
        <input type="checkbox" id="agree" required>
        <h4>I confirm that the information provided is accurate and complete.</h4>
      </div>

      <button type="submit">Submit Application</button>
    </form>
  </div>
</body>
<script src="cat-adoption-form.js"></script>
</html>