// Function to toggle the display of sections
function toggleSection(sectionId) {
    // Get all sections
    var sections = document.querySelectorAll('.card > .card');
    // Hide all sections except the one with the specified ID
    sections.forEach(function(section) {
        if (section.parentElement.id === sectionId) {
            section.style.display = 'block';
        } else {
            section.style.display = 'none';
        }
    });
}

// Add event listeners to the links to toggle sections
document.getElementById('user-login-link').addEventListener('click', function() {
    toggleSection('user-login');
});

document.getElementById('user-signup-link').addEventListener('click', function() {
    toggleSection('user-signup');
});

document.getElementById('admin-login-link').addEventListener('click', function() {
    toggleSection('admin-login');
});

document.getElementById('admin-signup-link').addEventListener('click', function() {
    toggleSection('admin-signup');
});

// By default, show the user login section
toggleSection('user-login');