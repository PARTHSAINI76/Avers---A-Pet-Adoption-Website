// Home Button //

var home = document.getElementById("home");

home.addEventListener("click", function() {
    window.location.href = "../index.php";
});

// Adopt webpage navigation //

document.getElementById('pet-select').addEventListener('change', function() {
    const selectedPet = this.value;
    if (selectedPet === 'dogBtn') {
        window.location.href = "../DogAdopt/dog-adopt.php";
    } else if (selectedPet === 'catBtn') {
        window.location.href = "../CatAdopt/cat-adopt.php";
    }
});

// Donation //

const DonationNavLink = document.getElementById('donation');
DonationNavLink.addEventListener('click', function(){
    window.location.href = "/AVERS/Donation/donation.php";
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
        window.location.href = "../Aboutus/aboutus.php";
    } else if (selectedPage === 'FAQ') {
        window.location.href = "../FAQ/FAQ.php";
    }
});

// Adopt Btn //

var adoptBtn = document.getElementById("adopt-btn");

adoptBtn.addEventListener('click', function(){
    window.location.href = "../DogAdopt/dog-adopt.php";
})
