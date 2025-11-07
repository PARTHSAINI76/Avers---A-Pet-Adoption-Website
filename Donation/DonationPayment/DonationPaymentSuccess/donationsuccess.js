// Simulate random transaction ID
    function generateTransactionID() {
      return 'TXN' + Math.floor(1000000000 + Math.random() * 9000000000);
    }

    // Example: Retrieve donation amount from query string (?amount=50)
    const params = new URLSearchParams(window.location.search);
    const donationAmount = params.get('amount') || '50.00';

    document.getElementById('donationAmount').textContent = `$${donationAmount}`;
    document.getElementById('amount').textContent = `$${donationAmount}`;
    document.getElementById('transactionID').textContent = generateTransactionID();

    // Social share button
    document.getElementById('shareBtn').addEventListener('click', () => {
      const shareText = `I just donated $${donationAmount} to help animals in need! 🐾 Join me in making a difference.`;
      const shareUrl = window.location.href;
      if (navigator.share) {
        navigator.share({ title: "Animal Donation", text: shareText, url: shareUrl });
      } else {
        alert("Share this message:\n\n" + shareText + "\n\nURL: " + shareUrl);
      }
    });

    // Homepage button
    document.getElementById('homeBtn').addEventListener('click', () => {
      window.location.href = "/AVERS/index.php"; 
    });