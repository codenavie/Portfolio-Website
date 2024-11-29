// Function to reveal sections when they scroll into view
function revealOnScroll() {
    const sections = document.querySelectorAll('.skills, .projects, .contact');

    // Loop through each section
    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        // Check if the section is within the viewport
        if (sectionTop < windowHeight - 100) {  
            section.classList.add('popout');    
        } else {
            section.classList.remove('popout'); 
        }
    });
}

// Listen for the scroll event to trigger the function
window.addEventListener('scroll', revealOnScroll);

// Call the function on page load in case some sections are already in view
revealOnScroll();
