const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');
const accountModal = document.getElementById('accountModal');
const modalOverlay = document.getElementById('modalOverlay');
const closeBtn = document.getElementById('closeBtn');

// Open modal
function openAccountModal() {
    accountModal.style.display = 'flex';
}

// Close modal
function closeModal() {
    accountModal.style.display = 'none';
}

signUpButton.addEventListener('click', () => {
    signUpForm.style.display = 'block';
    signInForm.style.display = 'none';
});

// Show sign-in form, hide sign-up form
signInButton.addEventListener('click', () => {
    signUpForm.style.display = 'none';
    signInForm.style.display = 'block';
});

// Close modal when clicking the close button or overlay
closeBtn.addEventListener('click', closeModal);
modalOverlay.addEventListener('click', closeModal);



// Sample data for dynamic gallery
const stylesData = {
    'men-pants': [
        'https://upload.wikimedia.org/wikipedia/commons/f/fc/ArmyacuOCP.jpg',
        'https://oldnavy.gap.com/webcontent/0053/465/338/cn53465338.jpg',
        'https://via.placeholder.com/150?text=Men+Pants+3'
    ],
    'men-polo': [
        'https://th.bing.com/th/id/OIP.TTID3mKGXdHhjATl1Ipx-AAAAA?rs=1&pid=ImgDetMain',
        'https://via.placeholder.com/150?text=Men+Polo+2',
        'https://via.placeholder.com/150?text=Men+Polo+3'
    ],
    'women-skirts': [
        'https://via.placeholder.com/150?text=Women+Skirt+1',
        'https://via.placeholder.com/150?text=Women+Skirt+2',
        'https://via.placeholder.com/150?text=Women+Skirt+3'
    ],
    'women-dress': [
        'https://via.placeholder.com/150?text=Women+Dress+1',
        'https://via.placeholder.com/150?text=Women+Dress+2',
        'https://via.placeholder.com/150?text=Women+Dress+3'
    ]
};

// Function to toggle subcategories visibility
function toggleSubcategories(category) {
    const subcategories = document.querySelector(`.${category}`);
    if (subcategories.style.display === "none" || subcategories.style.display === "") {
        subcategories.style.display = "block"; // Show subcategories
    } else {
        subcategories.style.display = "none"; // Hide subcategories
    }
}

// Function to filter styles based on category
function filterStyles(category, breadcrumb) {
    document.getElementById('breadcrumbs').textContent = breadcrumb;
    console.log(`Displaying styles for: ${category}`);
}

// Function to filter styles and update gallery
function filterStyles(category, breadcrumb) {
    const gallery = document.getElementById('gallery');
    const breadcrumbs = document.getElementById('breadcrumbs');

    breadcrumbs.textContent = breadcrumb;

    gallery.innerHTML = '';

    if (stylesData[category]) {
        stylesData[category].forEach(imageUrl => {
            const imgElement = document.createElement('img');
            imgElement.src = imageUrl;
            imgElement.alt = `${category} style`;
            gallery.appendChild(imgElement);
        });
    } else {
        gallery.innerHTML = '<p>No styles found for this category.</p>';
    }
}

// Function to filter fabrics and display them in the gallery
function filterFabrics(category, categoryName = '') {
    const breadcrumb = document.getElementById('breadcrumbs');
    if (categoryName) {
        breadcrumb.innerText = `Home / Fabrics / ${categoryName}`;
    }

    const gallery = document.getElementById('fabric-gallery');
    gallery.innerHTML = '';

    const fabricImages = {
        "cotton": ["cotton-shirt1.jpg", "cotton-shirt2.jpg", "cotton-shirt3.jpg"],
        "linen": ["linen-shirt1.jpg", "linen-shirt2.jpg", "linen-shirt3.jpg"],
        "silk": ["silk-blouse1.jpg", "silk-blouse2.jpg", "silk-blouse3.jpg"],
        "wool": ["wool-suit1.jpg", "wool-suit2.jpg", "wool-suit3.jpg"],
        "custom": ["custom-fabric1.jpg", "custom-fabric2.jpg"]
    };

    if (fabricImages[category]) {
        fabricImages[category].forEach(image => {
            const imgElement = document.createElement('img');
            imgElement.src = `images/${image}`;
            imgElement.alt = `${category} fabric`;
            gallery.appendChild(imgElement);
        });
    } else {
        gallery.innerHTML = '<p>No fabrics available for this category.</p>';
    }
}

// Open the modal when the book appointment button is clicked
bookAppointmentBtn?.addEventListener("click", () => {
    if (!auth.currentUser) {
        showModal(); // Show login modal if not logged in
    }
});

// Submit the appointment form after checking authentication
appointmentForm?.addEventListener('submit', (e) => {
    if (!auth.currentUser) {
        e.preventDefault(); // Prevent form submission if not logged in
        showModal();         // Show login modal
    } else {
        const appointmentData = {
            date: "2024-12-05",
            time: "14:00",
            service: "Dress Fitting"
        };
        saveAppointment(auth.currentUser.uid, appointmentData);
    }
});
