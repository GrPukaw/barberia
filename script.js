// script.js

// ======= SMOOTH SCROLL PARA ENLACES INTERNOS =======
document.querySelectorAll('nav a, .btn').forEach(link => {
    link.addEventListener('click', e => {
        const href = link.getAttribute('href');

        // Solo aplica desplazamiento suave si es un enlace interno (#)
        if (href && href.startsWith('#')) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        }
        // Si NO empieza con "#", permite que se abra normalmente
    });
});

// ======= ANIMACIÓN DE TARJETAS DE SERVICIOS =======
const cards = document.querySelectorAll('.card');
if (cards.length > 0) {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Solo una vez
            }
        });
    }, { threshold: 0.1 });

    cards.forEach(card => observer.observe(card));
}

// ======= OPCIONAL: MENSAJE EN CONSOLA =======
console.log("script.js cargado correctamente");
