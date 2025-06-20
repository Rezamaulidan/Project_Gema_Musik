// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('active');
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Program Registration Form Handling
    const registrationForms = document.querySelectorAll('form[action="#"]');
    registrationForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const programName = formData.get('program');
            
            // Simulate form submission
            console.log('Form submitted for program:', programName);
            
            // Show success message (in a real app, this would be an AJAX call)
            alert(`Terima kasih! Pendaftaran untuk program ${programName} telah berhasil. Kami akan menghubungi Anda segera.`);
            
            // Reset form
            this.reset();
        });
    });
});
