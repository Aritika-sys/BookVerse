document.addEventListener("DOMContentLoaded", function () {    
    // Function to allow only numbers
    function onlyNumbers(event) {
        var charCode = event.which || event.keyCode;
        if (charCode < 48 || charCode > 57) {
            event.preventDefault();
        }
    }
    document.getElementById("phone").addEventListener("keypress", onlyNumbers);
});


const emailInput = document.getElementById('email');
const errorMsg = document.getElementById('email-error');
function validateEmail() {
  const pattern = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
  const email = emailInput.value;

  if (!pattern.test(email)) {
    errorMsg.textContent = 'Email must be a valid @gmail.com address.';
    return false; // Prevent form submission
  }

  errorMsg.textContent = ''; // Clear error if valid
  return true;
}

emailInput.addEventListener('input', () => {
  if (emailInput.validity.valid) {
    errorMsg.textContent = '';
  }
}
);

function showPopup() {
  document.getElementById("popup-message").style.display = "block";
}

function closePopup() {
  document.getElementById("popup-message").style.display = "none";
}

window.onload = function() {
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.has('success')) {
      alert("Your message has been sent successfully! Thankyou for feedback");
  }
};


