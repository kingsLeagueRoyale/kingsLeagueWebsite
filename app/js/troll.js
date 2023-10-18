function moveTrollButton() {
    const trollButton = document.getElementById("troll-button");
    const container = document.getElementById("troll-button-container");
    const maxX = container.clientWidth - trollButton.clientWidth;

    // Obtiene la posición actual del botón
    const currentLeft = parseFloat(getComputedStyle(trollButton).left);

    // Calcula el rango permitido para la nueva posición
    const minLeft = currentLeft - 200;
    const maxLeft = currentLeft + 200;

    let randomX;

    // Genera una nueva posición hasta que esté lo suficientemente lejos de la posición actual
    do {
        randomX = Math.floor(Math.random() * maxX);
    } while (randomX >= minLeft && randomX <= maxLeft);

    // Asigna la nueva posición
    trollButton.style.left = randomX + "px";
}
