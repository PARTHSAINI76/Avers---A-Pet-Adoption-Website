
// Home Button //

var home = document.getElementById("home");

home.addEventListener("click", function() {
    window.location.href = "index.php";
});

// Adopt webpage navigation //

document.getElementById('pet-select').addEventListener('change', function() {
    const selectedPet = this.value;
    if (selectedPet === 'dogBtn') {
        window.location.href = "./DogAdopt/dog-adopt.php";
    } else if (selectedPet === 'catBtn') {
        window.location.href = "./CatAdopt/cat-adopt.php";
    }
});

// How it works //

var howitworks = document.getElementsByClassName("banner3");

var howitworksNav = document.getElementById("howitworks");

howitworksNav.addEventListener("click", function() {
    howitworks[0].scrollIntoView({ behavior: 'smooth' });
});

var howitworks2 = document.getElementById("howitworks2");

howitworks2.addEventListener("click", function() {
    howitworks[0].scrollIntoView({ behavior: 'smooth' });
});

// Volunteer //

var volunteerBtn = document.getElementById('volunteer-btn');
volunteerBtn.addEventListener('click',function(){
    window.location.href = "./Volunteer/volunteer.php"
})

// Adopt Btn //

var adoptBtn = document.getElementById("adopt-btn");

adoptBtn.addEventListener('click', function(){
    window.location.href = "./DogAdopt/dog-adopt.php";
})

// Contact Us Btn //

var contactBtn = document.getElementById('contactUs-btn');
contactBtn.addEventListener('click', function(){
    window.location.href = "./ContactUs/contactUs.php";
})

// Pages Dropdown //

document.getElementById('pages-select').addEventListener('change', function() {
    const selectedPage = this.value;
    if (selectedPage === 'AboutUs') {
        window.location.href = "./Aboutus/aboutus.php";
    } else if (selectedPage === 'FAQ') {
        window.location.href = "./FAQ/FAQ.php";
    }
});

// Navigation Buttons //

// Donation Link //
var donationBtn = document.getElementById('donation-btn');
donationBtn.addEventListener('click', function(){
    window.location.href = './Donation/donation.php';
})

// Dog List //
var dogList = document.getElementById('dog-list-btn');
dogList.addEventListener('click',function(){
    window.location.href = "./DogAdopt/dog-adopt.php";
})

// Cat List //
var catList = document.getElementById('cat-list-btn');
catList.addEventListener('click',function(){
    window.location.href = "./CatAdopt/cat-adopt.php";
})

// About Us //
var aboutus = document.getElementById("aboutus");
aboutus.addEventListener("click", function() {
    window.location.href = "./Aboutus/aboutus.php";
});

//Our Team //
var ourTeamBtn = document.getElementById('our-team-link');
ourTeamBtn.addEventListener('click', function(){
    window.location.href = "./OurTeam/ourTeam.php";
})

// FAQ'S//
var FAQBtn = document.getElementById('FAQ-link');
FAQBtn.addEventListener('click',function(){
    window.location.href = "./FAQ/FAQ.php";
})

//Contact//
var ContactLink = document.getElementById('contact-link');
ContactLink.addEventListener('click', function(){
    window.location.href = "./ContactUs/contactUs.php";
})

// Terms & Condition //

var TnCLink = document.getElementById('Tnc-link');
TnCLink.addEventListener('click', function(){
    window.location.href = "./TermsAndCondition/termsAndCondition.php";
}) 

// Privacy Policy //

var PrvcPolicyLink = document.getElementById('privacypolicy-link');
PrvcPolicyLink.addEventListener('click', function(){
    window.location.href = "./PrivacyPolicy/privacypolicy.php";
}) 

// Blog //

var BlogLink = document.getElementById('Blog-link');
BlogLink.addEventListener('click', function(){
    window.location.href = "./Blog/blog.php";
}) 

// Sitemap //

var SitemapLink = document.getElementById('Sitemap-link');
SitemapLink.addEventListener('click', function(){
    window.location.href = "./Sitemap/sitemap.php";
}) 