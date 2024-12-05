function toggleNavbar() {
    const navbarLinks = document.querySelector('.navbar-links');
    navbarLinks.classList.toggle('active');
}

function toggleTexto(parrafoId) {
    const parrafo = document.getElementById(parrafoId);
    const boton = parrafo.nextElementSibling; // El botón está después del párrafo
    
    if (parrafo.classList.contains('oculto')) {
        parrafo.classList.remove('oculto');
        parrafo.classList.add('mostrar-todo');
        boton.textContent = 'Leer menos';
    } else {
        parrafo.classList.remove('mostrar-todo');
        parrafo.classList.add('oculto');
        boton.textContent = 'Leer más';
    }
}

