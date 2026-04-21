// Variable para evitar escaneos duplicados
let isProcessing = false;
let lastScan = '';
let lastScanTime = 0;

// Función que procesa el código escaneado (reutiliza tu lógica existente)
function procesarCodigoEscaneado(codigo) {
    // Evitar escaneos duplicados (mismo código en menos de 1 segundo)
    let ahora = Date.now();
    if (codigo === lastScan && (ahora - lastScanTime) < 1000) {
        console.log('Escaneo duplicado ignorado');
        return;
    }
    
    if (isProcessing) {
        console.log('Ya procesando un escaneo');
        return;
    }
    
    isProcessing = true;
    lastScan = codigo;
    lastScanTime = ahora;
    
    console.log('Código escaneado:', codigo);
    
    // Reproducir audio de feedback
    document.getElementById("myAudio").play();
    
    // Obtener el evento
    var evento = document.getElementById('evento').value;
    
    // TU MISMO AJAX SIN CAMBIOS
    $.ajax({
        type: "POST",
        url: "prcd/checkin.php",
        data: {
            c: codigo,
            evento: evento
        },
        dataType: "json",
        async: true,
        cache: false,
        success: function(response) {
            var jsonData = JSON.parse(JSON.stringify(response));
            
            if (jsonData.success == "0") {
                let timerInterval;
                Swal.fire({
                    icon: 'warning',
                    title: 'No se realizó el registro',
                    html: 'Asistente previamente registrado<br>Ya existe el registro a este evento',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const b = Swal.getHtmlContainer().querySelector('b');
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft();
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                });
            } else if (jsonData.success == "1") {
                $.ajax({
                    type: "POST",
                    url: "prcd/datos_checkin.php",
                    data: {
                        c: codigo,
                        evento: evento
                    },
                    dataType: "html",
                    async: true,
                    cache: false,
                    success: function(response) {
                        $("#checkDiv").html(response);
                    }
                });
                
                let timerInterval;
                Swal.fire({
                    icon: 'success',
                    title: 'Registro correcto',
                    text: 'Has hecho checkin para el PEJ2023',
                    footer: 'INJUVENTUD | 2023',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const b = Swal.getHtmlContainer().querySelector('b');
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft();
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                });
            } else if (jsonData.success == "3") {
                let timerInterval;
                Swal.fire({
                    icon: 'error',
                    title: 'QR NO VÁLIDO',
                    text: 'Credenciales incorrectas',
                    footer: 'INJUVENTUD | 2023',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                        const b = Swal.getHtmlContainer().querySelector('b');
                        timerInterval = setInterval(() => {
                            b.textContent = Swal.getTimerLeft();
                        }, 100);
                    },
                    willClose: () => {
                        clearInterval(timerInterval);
                    }
                });
            }
        },
        complete: function() {
            setTimeout(() => {
                isProcessing = false;
            }, 500);
        },
        error: function() {
            isProcessing = false;
            console.error('Error en la petición AJAX');
        }
    });
}

// ==== MÉTODO 1: Capturar escaneo mediante un campo de texto oculto ====
// Esta es la forma más compatible con escáneres Newland

function inicializarScannerNewland() {
    // Crear un input oculto que capturará los escaneos
    let hiddenInput = document.getElementById('hiddenScannerInput');
    if (!hiddenInput) {
        hiddenInput = document.createElement('input');
        hiddenInput.type = 'text';
        hiddenInput.id = 'hiddenScannerInput';
        hiddenInput.style.position = 'absolute';
        hiddenInput.style.left = '-9999px';
        hiddenInput.style.top = '-9999px';
        hiddenInput.style.opacity = '0';
        document.body.appendChild(hiddenInput);
    }
    
    // Enfocar el input cuando la página está lista
    hiddenInput.focus();
    
    // Evento para capturar el Enter que envía el escáner
    hiddenInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            let codigo = this.value.trim();
            if (codigo !== '') {
                procesarCodigoEscaneado(codigo);
                this.value = ''; // Limpiar para el siguiente escaneo
            }
            e.preventDefault();
        }
    });
    
    // También capturar cambios (para escáneres que no envían Enter)
    hiddenInput.addEventListener('input', function() {
        // Si el escáner envía un carácter de terminación especial
        let codigo = this.value.trim();
        if (codigo !== '' && (codigo.includes('\n') || codigo.includes('\r'))) {
            let cleanCode = codigo.replace(/[\n\r]/g, '');
            procesarCodigoEscaneado(cleanCode);
            this.value = '';
        }
    });
    
    // Click en cualquier lugar vuelve a enfocar el input oculto
    document.body.addEventListener('click', function() {
        hiddenInput.focus();
    });
    
    console.log('Scanner Newland inicializado - Listo para escanear');
}

// ==== MÉTODO 2: Si prefieres usar el botón físico del escáner ====
// Algunos escáneres Newland emiten eventos de teclado especiales (F12, etc.)
// Este método escucha el botón de escaneo físico

function inicializarBotonFisico() {
    // Escuchar teclas especiales que algunos escáneres emiten al presionar el gatillo
    document.addEventListener('keydown', function(e) {
        // Teclas comunes que emiten los escáneres Newland al presionar el gatillo:
        // F12, F11, o combinaciones con Ctrl + Shift
        if (e.key === 'F12' || e.key === 'F11' || e.key === 'Scan' || 
            (e.ctrlKey && e.shiftKey && e.key === 'S')) {
            e.preventDefault();
            console.log('Botón de escaneo presionado');
            
            // Aquí podrías mostrar un indicador visual de que está listo
            const preview = document.getElementById('preview');
            if (preview) {
                preview.style.border = '2px solid green';
                setTimeout(() => {
                    preview.style.border = '';
                }, 200);
            }
            
            // El código se capturará a través del input oculto
            // Solo damos feedback visual
            return false;
        }
    });
}

// ==== REEMPLAZA TU FUNCIÓN abrirCamara ORIGINAL ====
// Ahora esta función ya no abre la cámara, solo inicia el scanner

function abrirCamara() {
    // Cambiar interfaz visual (ocultar imagen, mostrar preview)
    document.getElementById("imagenFCA").hidden = true;
    document.getElementById("preview").hidden = false;
    
    // Mostrar mensaje indicando que el scanner está listo
    const previewElement = document.getElementById('preview');
    previewElement.innerHTML = `
        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; background: #f5f5f5; border: 2px solid #4CAF50; border-radius: 8px;">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="2">
                <rect x="2" y="4" width="20" height="16" rx="2" ry="2"></rect>
                <line x1="8" y1="12" x2="16" y2="12"></line>
                <line x1="12" y1="8" x2="12" y2="16"></line>
            </svg>
            <p style="margin-top: 15px; font-size: 16px; color: #333;">📷 Escáner Newland listo</p>
            <p style="font-size: 14px; color: #666;">Presiona el gatillo para escanear</p>
        </div>
    `;
    
    // Inicializar el scanner si no está ya inicializado
    if (typeof window.scannerInitialized === 'undefined') {
        inicializarScannerNewland();
        inicializarBotonFisico();
        window.scannerInitialized = true;
    }
    
    // Asegurar que el input oculto tenga foco
    const hiddenInput = document.getElementById('hiddenScannerInput');
    if (hiddenInput) {
        hiddenInput.focus();
    }
}

// Botón cerrar (sin cambios importantes)
$('#botonCerrar').click(function() { 
    document.getElementById("imagenFCA").hidden = false; 
    document.getElementById("preview").hidden = true;
    
    // Limpiar preview
    const previewElement = document.getElementById('preview');
    if (previewElement) {
        previewElement.innerHTML = '';
    }
});

// Función checkIn que ya tenías
function checkIn(){
    alert('Realizó check-in');
}

// Inicializar automáticamente al cargar la página
$(document).ready(function() {
    // El scanner se inicializará cuando se llame a abrirCamara()
    console.log('Sistema listo - Esperando apertura de scanner');
});