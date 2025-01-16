export function showAlert(message, tipo = 'error') {
    const alert = document.createElement('div');
    alert.classList.add('alert');

    // Cargar la fuente personalizada usando FontFace
    const customFont = new FontFace('MiFuentePersonalizada', 'url(img/LeagueSpartan-Regular.ttf)');
    customFont.load().then(function(loadedFont) {
        // Añadir la fuente al documento
        document.fonts.add(loadedFont);

        // Aplicar la fuente al texto de la alerta
        text.style.fontFamily = 'MiFuentePersonalizada, sans-serif';
    }).catch(function(error) {
        console.error('Error al cargar la fuente:', error);
    });

    // Crear la imagen
    const img = document.createElement('img');
    img.style.height = '70%'; 
    img.style.marginRight = '10px'; 
    img.style.verticalAlign = 'middle'; 

    // Establecer la imagen y estilos según el tipo
    if (tipo === 'success') {
        img.src = 'img/alertasuccess.svg'; 
        alert.style.backgroundColor = 'rgb(219, 249, 251)'; 
        alert.style.color = '#333333';
        alert.style.borderLeft = '7px solid #47A1A8';
    } else if (tipo === 'error') {
        img.src = 'img/alertaerror.svg'; 
        alert.style.backgroundColor = 'rgb(255, 221, 221)'; 
        alert.style.color = '#333333';
        alert.style.borderLeft = '7px solid #e90000';
    } else if (tipo === 'alerta') {
        img.src = 'img/alertaalerta.svg';  // Usa una imagen para 'alerta'
        alert.style.backgroundColor = ' rgb(255, 251, 236)';  // Color de fondo más suave para alerta
        alert.style.color = '#9d7d3b';  // Color de texto más suave
        alert.style.borderLeft = '7px solid #ffcc00';  // Un borde amarillo para alerta
    }

    // Crear el texto y añadirlo
    const text = document.createElement('span');
    text.textContent = message;
    text.style.fontSize = '1.3vw';

    // Establecer flexbox en la alerta para centrar imagen y texto
    alert.style.display = 'flex';
    alert.style.flexDirection = 'row';
    alert.style.alignItems = 'center';  // Centra los elementos verticalmente
    alert.style.gap = '10px'; // Espacio entre la imagen y el texto

    alert.appendChild(img);
    alert.appendChild(text);

    // Estilos adicionales de la alerta
    alert.style.position = 'fixed';
    alert.style.bottom = '20px';
    alert.style.right = '20px';
    alert.style.padding = '15px 20px';
    alert.style.borderRadius = '5px';
    alert.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.2)';
    alert.style.fontSize = '16px';
    alert.style.opacity = '0';
    alert.style.transform = 'translateY(20px)';
    alert.style.transition = 'opacity 0.5s, transform 0.5s';
    alert.style.zIndex = '99999999999999999';
    alert.style.height = '10vh';
    alert.style.aspectRatio = '6/1';
    alert.style.display = 'none';

    // Asegurarse de que los estilos tengan prioridad con !important
    alert.style.position = 'fixed !important';
    alert.style.bottom = '20px !important';
    alert.style.right = '20px !important';
    alert.style.padding = '15px 20px !important';
    alert.style.borderRadius = '5px !important';
    alert.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.2) !important';
    alert.style.fontSize = '16px !important';
    alert.style.opacity = '0 !important';
    alert.style.transform = 'translateY(20px) !important';
    alert.style.transition = 'opacity 0.5s, transform 0.5s !important';
    alert.style.zIndex = '99999999999999999 !important';
    alert.style.height = '10vh !important';
    alert.style.aspectRatio = '6/1 !important';
    alert.style.display = 'none !important';

    // Añadir el div al body
    document.body.appendChild(alert);

    // Mostrar la alerta con animación
    setTimeout(() => {
        alert.style.display = 'flex';
        alert.style.opacity = '1';
        alert.style.fontFamily = customFont;
        alert.style.transform = 'translateY(0)';
    }, 0);

    // Ocultar automáticamente después de 3 segundos y eliminarla
    setTimeout(() => {
        alert.style.opacity = '0';
        alert.style.transform = 'translateY(20px)';
        setTimeout(() => {
            alert.remove(); 
        }, 500); 
    }, 3000);
}

window.showAlert = showAlert;
