// Home Button //

var home = document.getElementById("home");

home.addEventListener("click", function() {
    window.location.href = "/AVERS/index.php";
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

// Contact Us //

const ContactUsNavLink = document.getElementById('contactUs');
ContactUsNavLink.addEventListener('click', function(){
    window.location.href = "/AVERS/ContactUs/contactUs.php";
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
    } else if (selectedPage === 'contact') {
        window.location.href = "/AVERS/ContactUs/contactUs.php";
    }
});

// Adopt Btn //

var adoptBtn = document.getElementById("adopt-btn");

adoptBtn.addEventListener('click', function(){
    window.location.href = "/AVERS/DogAdopt/dog-adopt.php";
})
