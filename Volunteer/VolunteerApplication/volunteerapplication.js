// Home Button //

var home = document.getElementById("home");

home.addEventListener("click", function() {
    window.location.href = "../index.php";
});

// dog webpage navigation //

document.getElementById('pet-select').addEventListener('change', function() {
    const selectedPet = this.value;
    if (selectedPet === 'dogBtn') {
        window.location.href = "../DogAdopt/dog-adopt.php";
    } else if (selectedPet === 'catBtn') {
        window.location.href = "../CatAdopt/cat-adopt.php";
    }
});

// Donation //

const donationNavLink = document.getElementById('donation');
donationNavLink.addEventListener('click' , function(){
    window.location.href="/AVERS/Donation/donation.php";
}) 

// Volunteer //

var volunteerBtn = document.getElementById('volunteer-btn');
volunteerBtn.addEventListener('click',function(){
    window.location.href = "../Volunteer/volunteer.php"
})

// Pages Dropdown //

document.getElementById('pages-select').addEventListener('change', function() {
    const selectedPage = this.value;
    if (selectedPage === 'AboutUs') {
        window.location.href = "/AVERS/Aboutus/aboutus.php";
    } else if (selectedPage === 'contact') {
        window.location.href = "/AVERS/ContactUs/contactUs.php";
    } else if(selectedPage === 'FAQ'){
        window.location.href = "/AVERS/FAQ/FAQ.php";
    }
});

// Adopt Btn //

var adoptBtn = document.getElementById("adopt-btn");

adoptBtn.addEventListener('click', function(){
    window.location.href = "/AVERS/DogAdopt/dog-adopt.php";
})

// Volunteer Btn //
var volunteerApplicationBtn = document.getElementById('volunteer-btn');
volunteerApplicationBtn.addEventListener('click', function(){
    window.location.href = "/AVERS/Volunteer/volunteer.php";
})

// Navigation Buttons //

// Donation Link //
var donationBtn = document.getElementById('donation-btn');
donationBtn.addEventListener('click', function(){
    window.location.href = '/AVERS/Donation/donation.php';
})

// Dog List //
var dogList = document.getElementById('dog-list-btn');
dogList.addEventListener('click',function(){
    window.location.href = "/AVERS/DogAdopt/dog-adopt.php";
})

// Cat List //
var catList = document.getElementById('cat-list-btn');
catList.addEventListener('click',function(){
    window.location.href = "/AVERS/CatAdopt/cat-adopt.php";
})

// About Us //
var aboutus = document.getElementById("aboutus");
aboutus.addEventListener("click", function() {
    window.location.href = "/AVERS/Aboutus/aboutus.php";
});

//Our Team //
var ourTeamBtn = document.getElementById('our-team-link');
ourTeamBtn.addEventListener('click', function(){
    window.location.href = "/AVERS/OurTeam/ourTeam.php";
})

// FAQ'S//
var FAQBtn = document.getElementById('FAQ-link');
FAQBtn.addEventListener('click',function(){
    window.location.href = "/AVERS/FAQ/FAQ.php";
})

//Contact//
var ContactLink = document.getElementById('contact-link');
ContactLink.addEventListener('click', function(){
    window.location.href = "/AVERS/ContactUs/contactUs.php";
})

// Terms & Condition //

var TnCLink = document.getElementById('Tnc-link');
TnCLink.addEventListener('click', function(){
    window.location.href = "/AVERS/TermsAndCondition/termsAndCondition.php";
}) 

// Privacy Policy //

var PrvcPolicyLink = document.getElementById('privacypolicy-link');
PrvcPolicyLink.addEventListener('click', function(){
    window.location.href = "/AVERS/PrivacyPolicy/privacypolicy.php";
}) 

// Blog //

var BlogLink = document.getElementById('Blog-link');
BlogLink.addEventListener('click', function(){
    window.location.href = "/AVERS/Blog/blog.php";
}) 

// Sitemap //

var SitemapLink = document.getElementById('Sitemap-link');
SitemapLink.addEventListener('click', function(){
    window.location.href = "/AVERS/Sitemap/sitemap.php";
})