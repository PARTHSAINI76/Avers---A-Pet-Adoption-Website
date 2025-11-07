// Home Button //

var home = document.getElementById("home");

home.addEventListener("click", function() {
    window.location.href = "../index.php";
});

const homelink = document.getElementById("home-link");

homelink.addEventListener("click", function() {
    window.location.href = "../index.php";
});

// Adopt webpage navigation //

document.getElementById('pet-select').addEventListener('change', function() {
    const selectedPet = this.value;
    if (selectedPet === 'dogBtn') {
        window.location.href = "/AVERS/DogAdopt/dog-adopt.php";
    } else if (selectedPet === 'catBtn') {
        window.location.href = "/AVERS/CatAdopt/cat-adopt.php";
    }
});

// Contact Link //

const contactNavLink = document.getElementById('contact');
contactNavLink.addEventListener('click' , function(){
    window.location.href = "/AVERS/Contact/contact.php";
})

// Volunteer //

var volunteerBtn = document.getElementById('volunteer-btn');
volunteerBtn.addEventListener('click',function(){
    window.location.href = "/AVERS/Volunteer/volunteer.php"
})

// Pages Dropdown //

document.getElementById('pages-select').addEventListener('change', function() {
    const selectedPage = this.value;
    if (selectedPage === 'AboutUs') {
        window.location.href = "/AVERS/Aboutus/aboutus.php";
    } else if (selectedPage === 'FAQ') {
        window.location.href = "/AVERS/FAQ/FAQ.php";
    }
});

// Adopt Btn //

var adoptBtn = document.getElementById("adopt-btn");

adoptBtn.addEventListener('click', function(){
    window.location.href = "/AVERS/DogAdopt/dog-adopt.php";
})

// DONATE BUTTONS JS //
const btn1 = document.getElementById("donate-btn1");
const btn2 = document.getElementById("donate-btn2");
const btn3 = document.getElementById("donate-btn3");
const btn4 = document.getElementById("donate-btn4");

  [btn1, btn2 , btn3 , btn4].forEach(button => {
    button.addEventListener("click", () => {
      window.location.href = "./DonationPayment/donationpayment.php";
    });
  });


// DONATION SLIDER// 
const slides = document.getElementById('slides');
  const dots = document.querySelectorAll('.dot');
  const totalSlides = dots.length;
  let currentIndex = 0;

  function showSlide(index) {
    slides.style.transform = `translateX(-${index * 100}%)`;
    dots.forEach(dot => dot.classList.remove('active'));
    dots[index].classList.add('active');
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    showSlide(currentIndex);
  }

  // Auto slide every 3 seconds
  setInterval(nextSlide, 3000);

  // Optional: Allow clicking on dots to jump to slide
  dots.forEach((dot, idx) => {
    dot.addEventListener('click', () => {
      currentIndex = idx;
      showSlide(currentIndex);
    });
  });

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