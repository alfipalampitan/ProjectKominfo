import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function() {
    // Ambil parameter dari URL
    const params = new URLSearchParams(window.location.search);
    const sectionId = params.get("scroll"); // Ambil nilai dari ?scroll=
    
    if (sectionId) {
        const targetElement = document.getElementById(sectionId);
        if (targetElement) {
            setTimeout(() => {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Atur offset agar tidak tertutup navbar
                    behavior: "smooth"
                });
            }, 500); // Delay sedikit agar halaman sempat dimuat
        }
    }
});