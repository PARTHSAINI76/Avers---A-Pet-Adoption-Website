// Home Button //

var home = document.getElementById("home");

home.addEventListener("click", function() {
    window.location.href = "/Avers/index.php";
});

const homelink = document.getElementById("home-link");

homelink.addEventListener("click", function() {
    window.location.href = "/Avers/index.php";
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

// Donation //

const donationNavLink = document.getElementById('donation');
donationNavLink.addEventListener('click', function(){
  window.location.href = "/AVERS/Donation/donation.php";
})

// Volunteer //

var volunteerBtn = document.getElementById('volunteer-btn');
volunteerBtn.addEventListener('click',function(){
    window.location.href = "/AVERS/Volunteer/volunteer.php"
})

// Adopt Btn //

document.getElementById("adopt-btn").addEventListener("click", () => {
  const currentURL = window.location.href.toLowerCase();

  if (currentURL.includes("dogdetail")) {
    window.location.href = "/AVERS/CatAdopt/cat-adopt.php";
  }else {
    console.log('THIS PAGE IS CURRENTLY ON OTHER PAGES');
  }
});

// Pages Dropdown //

document.getElementById('pages-select').addEventListener('change', function() {
    const selectedPage = this.value;
    if (selectedPage === 'AboutUs') {
        window.location.href = "/AVERS/Aboutus/aboutus.php";
    } else if (selectedPage === 'FAQ') {
        window.location.href = "/AVERS/FAQ/FAQ.php";
    } else if (selectedPage === 'contact') {
        window.location.href = "/AVERS/ContactUs/contactUs.php";
    }
});

// Adopt Apply Btn //

  const btn1 = document.getElementById("apply-btn1");
  const btn2 = document.getElementById("apply-btn2");

  [btn1, btn2].forEach(button => {
    button.addEventListener("click", () => {
      window.location.href = "/AVERS/DogAdopt/DogDetails/dog-adoption-form/dog-adoption-form.php";
    });
  });

// Video Play-Pause Javascript

const video = document.getElementById("myVideo");
    const playPauseBtn = document.getElementById("playPauseBtn");

    // Function to toggle play/pause
    function togglePlayPause() {
      if (video.paused) {
        video.play();
        playPauseBtn.textContent = "⏸"; // pause icon
      } else {
        video.pause();
        playPauseBtn.textContent = "▶"; // play icon
      }
    }

    // Button click
    playPauseBtn.addEventListener("click", togglePlayPause);

    // Video click
    video.addEventListener("click", togglePlayPause);

    // Spacebar press
    document.addEventListener("keydown", (event) => {
      if (event.code === "Space") {
        event.preventDefault(); // prevent page scroll
        togglePlayPause();
      }
    });

    // Hide button when playing
    video.addEventListener("play", () => {
      playPauseBtn.classList.add("hidden");
    });

    // Show button when paused
    video.addEventListener("pause", () => {
      playPauseBtn.classList.remove("hidden");
    });

    // Reset to ▶ when video ends
    video.addEventListener("ended", () => {
      playPauseBtn.textContent = "▶";
      playPauseBtn.classList.remove("hidden");
    });

// VIEW MORE BUTTON//

const viewMoreBtn = document.getElementById('view-more-btn');
viewMoreBtn.addEventListener('click',function(){
  window.location.href="/AVERS/DogAdopt/dog-adopt.php"
})

// CARDS JS //

const images = document.querySelectorAll("#card-1");

// Loop through each image

images.forEach((img, index) => {
  img.addEventListener("click", () => {
    if (index === 0) {
      window.location.href = "../Dogdetail3/dogdetail3.php";
    } else if (index === 1) {
      window.location.href = "../Dogdetail4/dogdetail4.php";
    } else if (index === 2) {
      window.location.href = "../Dogdetail5/dogdetail5.php";
    }else if (index === 3) {
      window.location.href = "../Dogdetail6/dogdetail6.php";
    }else {
      alert("No page linked for this image!");
    }
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
