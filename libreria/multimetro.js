
const observerOptions = {
    threshold: 0.5
};
const handleIntersection = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const globeMessage = entry.target.previousElementSibling;
            if (globeMessage && globeMessage.classList.contains('globe-message')) {
                globeMessage.classList.add('visible');
                setTimeout(() => {
                    globeMessage.classList.remove('visible');
                }, 3000);
                observer.unobserve(entry.target);
            }
        }
    });
};
const observer = new IntersectionObserver(handleIntersection, observerOptions);
document.querySelectorAll('.globe-message').forEach(message => {
    const targetElement = message.nextElementSibling;
    if (targetElement) {
        observer.observe(targetElement);
    }
});


const slideClicker = document.querySelectorAll('.slideClicker');
const multimetro = document.getElementById('nextcategoria');
let position = 0;
const container = document.getElementById('imageContainer');
const rotatingImage = document.getElementById('rotatingImage');

function updateSlideClicker() {
    slideClicker.forEach((slideClicker, index) => {
        let offset = index - position;
        if (offset < -3) offset += 7;
        if (offset > 3) offset -= 7;
        slideClicker.style.transform = `translateX(${offset * 110}%)`;
        slideClicker.style.opacity = index === position ? 1 : 0;
        slideClicker.classList.toggle('active', index === position);
    });
}

multimetro.addEventListener('click', () => {
    position = (position + 1) % 7;
    rotarperilla();
    setTimeout(() => {
    updateSlideClicker();},370);
});

function rotarperilla() {
    if (position > 6) {
        position = 0;
    }

    const rotation = position * 34;

    rotatingImage.style.transform = `rotate(${rotation}deg)`;
}

updateSlideClicker(); // Inicializar la posición de los slideClicker funcion hecha por Osvaldo Emmanuel Herrera Villa