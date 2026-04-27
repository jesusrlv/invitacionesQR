<?php
    $eventoId = $_REQUEST['id'];
    if (!$eventoId) {
        echo "ID de evento no proporcionado.";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Sistema de Check-in con Escáner INJUVENTUD</title>
    <link rel="icon" type="image/png" href="../img/icon.ico"/>
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            overflow: hidden;
            width: 100%;
            max-width: 600px;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .header p {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .content {
            padding: 30px;
        }
        
        .preview-area {
            margin-bottom: 25px;
        }
        
        #preview {
            width: 100%;
            min-height: 300px;
            background: #f7f7f7;
            border-radius: 12px;
            border: 2px dashed #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        
        #preview.active {
            border-color: #4CAF50;
            background: #f0f9f0;
        }
        
        .scanner-message {
            text-align: center;
            padding: 40px 20px;
        }
        
        .scanner-message svg {
            margin-bottom: 15px;
        }
        
        .scanner-message h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 20px;
        }
        
        .scanner-message p {
            color: #666;
            font-size: 14px;
            margin-top: 10px;
        }
        
        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .btn {
            flex: 1;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        
        .btn-danger {
            background: #dc3545;
            color: white;
        }
        
        .btn-success {
            background: #28a745;
            color: white;
        }
        
        .info-area {
            margin-top: 25px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            display: none;
        }
        
        .info-area.show {
            display: block;
            animation: slideUp 0.3s ease;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .info-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            font-size: 16px;
        }
        
        .info-content {
            color: #666;
            font-size: 14px;
            word-break: break-all;
        }
        
        .badge {
            display: inline-block;
            padding: 4px 8px;
            background: #e9ecef;
            border-radius: 4px;
            font-size: 12px;
            margin-top: 10px;
        }
        
        audio {
            display: none;
        }
        
        #imagenFCA {
            text-align: center;
            padding: 40px 20px;
        }
        
        #imagenFCA svg {
            margin-bottom: 20px;
        }
        
        .status-indicator {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #ccc;
            margin-right: 8px;
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
        
        .status-indicator.active {
            background: #4CAF50;
        }
        
        .footer {
            background: #f8f9fa;
            padding: 15px 30px;
            text-align: center;
            font-size: 12px;
            color: #999;
            border-top: 1px solid #e0e0e0;
        }
        
        input#hiddenScannerInput {
            position: absolute;
            left: -9999px;
            top: -9999px;
            opacity: 0;
            width: 1px;
            height: 1px;
        }
        
        .last-scan {
            margin-top: 15px;
            padding: 10px;
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            border-radius: 4px;
            font-size: 12px;
        }
        
        .last-scan strong {
            color: #856404;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h3>📱 Sistema de Check-in <br>(<span id="eventoScan"></span>)</h3>
            <p>Escáner INJUVENTUD - Presiona el gatillo para escanear</p>
        </div>
        
        <div class="content">
            <!-- Input oculto para capturar el escáner -->
            <input type="text" id="hiddenScannerInput" autocomplete="off" value="<?php echo $eventoId; ?>">
            
            <!-- Área de preview (simulada para el escáner) -->
            <div class="preview-area">
                <div id="preview" hidden>
                    <div class="scanner-message">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#4CAF50" stroke-width="1.5">
                            <rect x="2" y="4" width="20" height="16" rx="2" ry="2"></rect>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <circle cx="12" cy="12" r="2" fill="#4CAF50"></circle>
                        </svg>
                        <h3>Escáner INJUVENUD Listo</h3>
                        <p>✅ Enfoque el código QR o código de barras<br>🔘 Presione el gatillo para escanear<br>📊 El resultado se procesará automáticamente</p>
                        <div class="badge">
                            <span class="status-indicator" id="statusIndicator"></span>
                            <span id="statusText">Escáner inactivo</span>
                        </div>
                    </div>
                </div>
                
                <!-- Imagen inicial (hidden cuando se activa el escáner) -->
                <div id="imagenFCA">
                    <div class="scanner-message">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="1.5">
                            <rect x="2" y="4" width="20" height="16" rx="2" ry="2"></rect>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                        </svg>
                        <h3>Sistema de Escaneo</h3>
                        <p>Presione "Iniciar Escáner" para comenzar</p>
                    </div>
                </div>
            </div>
            
            <!-- Botones de control -->
            <div class="button-group">
                <button class="btn btn-primary" id="btnIniciarScanner">
                    ▶ Iniciar Escáner
                </button>
                <button class="btn btn-danger" id="btnCerrarScanner" disabled>
                    ⬛ Cerrar Escáner
                </button>
            </div>
            
            <!-- Área de información del último escaneo -->
            <div class="info-area" id="infoArea">
                <div class="info-title">📋 Último escaneo:</div>
                <div class="info-content" id="lastScanContent">-</div>
            </div>
            
            <!-- Div para mostrar datos del check-in -->
            <div id="checkDiv"></div>
        </div>
        
        <div class="footer">
            Sistema de check-in con escáner | INJUVENTUD 2026
        </div>
    </div>
    
    <!-- Audio para feedback (se crea dinámicamente si no existe) -->
    <audio id="myAudio" preload="auto">
        <source src="https://www.soundjay.com/misc/sounds/bell-ringing-05.mp3" type="audio/mpeg">
    </audio>
    
    <script>
        // ============================================
        // VARIABLES GLOBALES
        // ============================================
        let isScannerActive = false;
        let isProcessing = false;
        let lastScan = '';
        let lastScanTime = 0;
        
        // ============================================
        // FUNCIÓN PARA CORREGIR CARACTERES DEL ESCÁNER NEWLAND
        // ============================================
        function corregirCaracteresEscaneados(codigo) {
            // Mapeo de caracteres comunes que los escáneres Newland pueden cambiar
            const reemplazos = {
                '¿': '@',      // Algunos escáneres cambian @ por ¿
                '"': '@',      // O por comillas
                '¢': '@',      // O por este símbolo
                '�': '@',      // Carácter de reemplazo Unicode
                '(at)': '@',   // Si el escáner lo convierte a texto
                '%40': '@'     // Si lo lee como URL encoded
            };
            
            let corregido = codigo;
            for (let [malo, bueno] of Object.entries(reemplazos)) {
                corregido = corregido.split(malo).join(bueno);
            }
            
            // Si el código tiene formato de email pero le falta @
            // Ejemplo: "bajolarbolgmail.com" -> "bajolarbol@gmail.com"
            const emailPattern = /^([a-zA-Z0-9._-]+)(gmail\.com|hotmail\.com|yahoo\.com|outlook\.com)$/i;
            const match = corregido.match(emailPattern);
            if (match && !corregido.includes('@')) {
                corregido = match[1] + '@' + match[2];
                console.log('📧 Email corregido (agregado @):', corregido);
            }
            
            return corregido;
        }
        
        // ============================================
        // FUNCIÓN PRINCIPAL: Procesar código escaneado
        // ============================================
        function procesarCodigoEscaneado(codigo) {
            // Limpiar el código (eliminar saltos de línea, espacios, etc.)
            let cleanCode = codigo.toString().trim().replace(/[\n\r\t]/g, '');
            
            // CORREGIR CARACTERES MAL INTERPRETADOS POR EL ESCÁNER NEWLAND
            cleanCode = corregirCaracteresEscaneados(cleanCode);
            
            if (!cleanCode || cleanCode.length === 0) {
                console.log('Código vacío, ignorando');
                return;
            }
            
            // Evitar escaneos duplicados (mismo código en menos de 1 segundo)
            let ahora = Date.now();
            if (cleanCode === lastScan && (ahora - lastScanTime) < 1000) {
                console.log('Escaneo duplicado ignorado:', cleanCode);
                return;
            }
            
            if (isProcessing) {
                console.log('Ya procesando un escaneo, esperar...');
                return;
            }
            
            isProcessing = true;
            lastScan = cleanCode;
            lastScanTime = ahora;
            
            console.log('📷 Código escaneado (corregido):', cleanCode);
            
            // Mostrar en el área de información
            document.getElementById('infoArea').classList.add('show');
            document.getElementById('lastScanContent').innerHTML = `<strong>${cleanCode}</strong><br><span style="font-size:11px; color:#999;">${new Date().toLocaleTimeString()}</span>`;
            
            // Reproducir audio de feedback
            const audio = document.getElementById('myAudio');
            if (audio) {
                audio.play().catch(e => console.log('Audio no se pudo reproducir:', e));
            }
            
            // evento
            let evento = document.getElementById('hiddenScannerInput').value;
            
            // ========================================
            // TU AJAX ORIGINAL (descomentar para usar)
            // ========================================
            
            $.ajax({
                type: "POST",
                url: "prcd/checkin.php",
                data: {
                    c: cleanCode,
                    evento: evento
                },
                dataType: "json",
                async: true,
                cache: false,
                success: function(response) {
                    var jsonData = JSON.parse(JSON.stringify(response));
                    
                    if (jsonData.success == "0") {
                        Swal.fire({
                            icon: 'warning',
                            title: 'No se realizó el registro',
                            html: 'Asistente previamente registrado<br>Ya existe el registro a este evento',
                            timer: 2000,
                            timerProgressBar: true
                        });
                    } else if (jsonData.success == "1") {
                        $.ajax({
                            type: "POST",
                            url: "prcd/datos_checkin.php",
                            data: { c: cleanCode, evento: evento },
                            success: function(response) {
                                $("#checkDiv").html(response);
                            }
                        });
                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Registro correcto',
                            text: 'Has hecho checkin para el PEJ2026',
                            footer: 'INJUVENTUD | 2026',
                            timer: 2000,
                            timerProgressBar: true
                        });
                    } else if (jsonData.success == "3") {
                        Swal.fire({
                            icon: 'error',
                            title: 'QR NO VÁLIDO',
                            text: 'Credenciales incorrectas',
                            footer: 'INJUVENTUD | 2026',
                            timer: 2000,
                            timerProgressBar: true
                        });
                    }
                },
                complete: function() {
                    setTimeout(() => { isProcessing = false; }, 500);
                },
                error: function() {
                    isProcessing = false;
                    Swal.fire({
                        icon: 'error',
                        title: 'Error de conexión',
                        text: 'No se pudo conectar con el servidor',
                        timer: 2000
                    });
                }
            });
            
            
            
            
            // Limpiar el input oculto para la siguiente lectura
            const hiddenInput = document.getElementById('hiddenScannerInput');
            if (hiddenInput) {
                hiddenInput.value = '';
                setTimeout(() => {
                    if (isScannerActive) {
                        hiddenInput.focus();
                    }
                }, 100);
            }
        }
        
        // ============================================
        // INICIALIZAR ESCÁNER NEWLAND
        // ============================================
        function inicializarScannerNewland() {
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
            
            const newHiddenInput = hiddenInput.cloneNode(true);
            hiddenInput.parentNode.replaceChild(newHiddenInput, hiddenInput);
            const finalInput = document.getElementById('hiddenScannerInput');
            
            finalInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && isScannerActive) {
                    e.preventDefault();
                    let codigo = this.value.trim();
                    if (codigo !== '') {
                        procesarCodigoEscaneado(codigo);
                        this.value = '';
                    }
                }
            });
            
            finalInput.addEventListener('input', function() {
                if (!isScannerActive) return;
                
                let valor = this.value;
                if (valor.includes('\n') || valor.includes('\r')) {
                    let cleanCode = valor.replace(/[\n\r]/g, '').trim();
                    if (cleanCode !== '') {
                        procesarCodigoEscaneado(cleanCode);
                        this.value = '';
                    }
                }
            });
            
            let scanTimer;
            finalInput.addEventListener('keyup', function(e) {
                if (!isScannerActive) return;
                
                clearTimeout(scanTimer);
                
                if (e.key === 'Enter') {
                    let codigo = this.value.trim();
                    if (codigo !== '') {
                        procesarCodigoEscaneado(codigo);
                        this.value = '';
                    }
                } else {
                    scanTimer = setTimeout(() => {
                        if (isScannerActive) {
                            let codigo = finalInput.value.trim();
                            if (codigo !== '' && codigo.length > 3) {
                                procesarCodigoEscaneado(codigo);
                                finalInput.value = '';
                            }
                        }
                    }, 200);
                }
            });
            
            console.log('✅ Escáner INJUVENTUD inicializado correctamente');
            return finalInput;
        }
        
        // ============================================
        // ABRIR ESCÁNER
        // ============================================
        function abrirScanner() {
            if (isScannerActive) {
                console.log('Escáner ya está activo');
                return;
            }
            
            document.getElementById("imagenFCA").hidden = true;
            const previewDiv = document.getElementById("preview");
            previewDiv.hidden = false;
            previewDiv.classList.add('active');
            
            isScannerActive = true;
            
            if (typeof window.scannerInitialized === 'undefined') {
                inicializarScannerNewland();
                window.scannerInitialized = true;
            }
            
            const hiddenInput = document.getElementById('hiddenScannerInput');
            if (hiddenInput) {
                hiddenInput.focus();
                hiddenInput.value = '';
            }
            
            document.getElementById('btnIniciarScanner').disabled = true;
            document.getElementById('btnCerrarScanner').disabled = false;
            
            console.log('🎯 Escáner activado - Listo para escanear');
            document.getElementById('statusIndicator').classList.add('active');
            document.getElementById('statusText').innerText = '';
            document.getElementById('statusText').innerText = 'Escáner activo';


            
            Swal.fire({
                icon: 'success',
                title: 'Escáner Listo',
                text: 'Presiona el gatillo del dispositivo para escanear',
                timer: 1500,
                showConfirmButton: false
            });
        }
        
        // ============================================
        // CERRAR ESCÁNER
        // ============================================
        function cerrarScanner() {
            if (!isScannerActive) return;
            
            isScannerActive = false;
            
            document.getElementById("imagenFCA").hidden = false;
            const previewDiv = document.getElementById("preview");
            previewDiv.hidden = true;
            previewDiv.classList.remove('active');
            
            const hiddenInput = document.getElementById('hiddenScannerInput');
            if (hiddenInput) {
                hiddenInput.blur();
                hiddenInput.value = '';
            }
            
            document.getElementById('btnIniciarScanner').disabled = false;
            document.getElementById('btnCerrarScanner').disabled = true;
            
            console.log('🔴 Escáner cerrado');
            document.getElementById('statusIndicator').classList.remove('active');
            document.getElementById('statusText').innerText = '';
            document.getElementById('statusText').innerText = 'Escáner inactivo';
        }
        
        // ============================================
        // CAPTURAR BOTÓN FÍSICO DEL ESCÁNER
        // ============================================
        function capturarBotonFisico() {
            document.addEventListener('keydown', function(e) {
                if (e.key === 'F12' || e.key === 'F11' || e.key === 'Scan' || 
                    (e.ctrlKey && e.shiftKey && e.key === 'S')) {
                    e.preventDefault();
                    console.log('🔘 Botón de escaneo presionado');
                    
                    const preview = document.getElementById('preview');
                    if (preview && !preview.hidden) {
                        preview.style.transform = 'scale(0.99)';
                        setTimeout(() => {
                            preview.style.transform = '';
                        }, 200);
                    }
                    
                    if (isScannerActive) {
                        const hiddenInput = document.getElementById('hiddenScannerInput');
                        if (hiddenInput) {
                            hiddenInput.focus();
                        }
                    }
                }
            });
        }
        
        // ============================================
        // EVENTOS DE UI
        // ============================================
        document.getElementById('btnIniciarScanner').addEventListener('click', abrirScanner);
        document.getElementById('btnCerrarScanner').addEventListener('click', cerrarScanner);
        
        document.addEventListener('click', function(e) {
            if (isScannerActive && !e.target.closest('.container')) {
                const hiddenInput = document.getElementById('hiddenScannerInput');
                if (hiddenInput) {
                    hiddenInput.focus();
                }
            }
        });
        
        // ============================================
        // INICIALIZACIÓN
        // ============================================
        $(document).ready(function() {
            console.log('🚀 Sistema listo - Esperando inicio del escáner');
            
            const audio = document.getElementById('myAudio');
            if (audio) {
                audio.load();
            }
            
            capturarBotonFisico();
        });
        
        function checkIn() {
            alert('Check-in realizado');
        }
        
        window.abrirScanner = abrirScanner;
        window.cerrarScanner = cerrarScanner;
        window.procesarCodigoEscaneado = procesarCodigoEscaneado;
        
        function evento() {
            let evento = document.getElementById('hiddenScannerInput').value;
            $.ajax({
                type: "POST",
                url: "prcd/nombreEvento.php",
                data: {
                    evento: evento
                },
                dataType: "json",
                success: function(response) {
                    document.getElementById('eventoScan').innerText = response.nombre_evento;
                }
            });
        }
        evento();
    </script>
</body>
</html>