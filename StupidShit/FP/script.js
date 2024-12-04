// Get modal element and open/close buttons
var modal = document.getElementById("login-modal");
var bookAppointmentLink = document.getElementById("book-appointment-link");
var closeModal = document.getElementsByClassName("close")[0];

// Show modal when "Book Appointment" is clicked
bookAppointmentLink.onclick = function() {
    modal.style.display = "block";
}

// Close modal when "X" is clicked
closeModal.onclick = function() {
    modal.style.display = "none";
}

// Close modal if the user clicks outside of the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Handle successful login or sign-up (simplified for example purposes)
document.getElementById("login-form").onsubmit = function(event) {
    event.preventDefault(); // Prevent form submission for demo purposes

    // Here you would normally check the user's credentials with a backend system

    // If successful, hide the modal and show the booking form
    modal.style.display = "none";
    document.getElementById("book-appointment").style.display = "block";
}
