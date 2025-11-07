 let seconds = 5;
    const secondsText = document.getElementById("seconds");
    const secondsBox = document.getElementById("secondBox");

    const timer = setInterval(() => {
      seconds--;
      secondsText.textContent = seconds;
      secondsBox.textContent = seconds.toString().padStart(2, '0');
      if (seconds <= 0) {
        clearInterval(timer);
        window.location.href = "/AVERS/index.php"; // Redirect to homepage
      }
    }, 1000);