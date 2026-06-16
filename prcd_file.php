<?php
$idUsr = $_POST['idUsuario'];
$fileName = $_FILES["file"]["name"];
$fileTmpLoc = $_FILES["file"]["tmp_name"];

if (!$fileTmpLoc) {
    echo "ERROR: Por favor selecciona un archivo.";
    exit();
}

// Configuración
$directorio = "docs/";
$calidad_jpg = 85; // Calidad de 1 a 100
$max_ancho = 1920;  // Máximo ancho en píxeles
$max_alto = 1080;   // Máximo alto en píxeles

// Crear directorio si no existe
if (!file_exists($directorio)) {
    mkdir($directorio, 0777, true);
}

// Función para convertir a JPG
function convertirAJPG($ruta_origen, $ruta_destino, $calidad, $max_ancho, $max_alto) {
    $info = getimagesize($ruta_origen);
    //getimagesize() es una función de PHP que devuelve un array con información de la imagen:
    $tipo = $info[2];
    // $info[0] = ancho en píxeles
    // $info[1] = alto en píxeles  
    // $info[2] = constante del tipo de imagen (número)
    // $info[3] = string HTML de dimensiones
    // $info['mime'] = tipo MIME (ej: "image/jpeg")
    
    // Crear imagen según tipo
    switch($tipo) {
        case IMAGETYPE_JPEG:
            $imagen = imagecreatefromjpeg($ruta_origen);
            break;
        case IMAGETYPE_PNG:
            $imagen = imagecreatefrompng($ruta_origen);
            // Preservar transparencia (fondo blanco)
            $fondo = imagecreatetruecolor(imagesx($imagen), imagesy($imagen));
            $blanco = imagecolorallocate($fondo, 255, 255, 255);
            imagefill($fondo, 0, 0, $blanco);
            imagecopy($fondo, $imagen, 0, 0, 0, 0, imagesx($imagen), imagesy($imagen));
            $imagen = $fondo;
            break;
        case IMAGETYPE_GIF:
            $imagen = imagecreatefromgif($ruta_origen);
            break;
        case IMAGETYPE_BMP:
            $imagen = imagecreatefrombmp($ruta_origen);
            break;
        case IMAGETYPE_WEBP:
            $imagen = imagecreatefromwebp($ruta_origen);
            break;
        default:
            return false;
    }
    
    // Redimensionar si es necesario
    $ancho_orig = imagesx($imagen);
    $alto_orig = imagesy($imagen);
    
    if ($ancho_orig > $max_ancho || $alto_orig > $max_alto) {
        $proporcion = min($max_ancho / $ancho_orig, $max_alto / $alto_orig);
        $nuevo_ancho = $ancho_orig * $proporcion;
        $nuevo_alto = $alto_orig * $proporcion;
        
        $imagen_redim = imagecreatetruecolor($nuevo_ancho, $nuevo_alto);
        imagecopyresampled($imagen_redim, $imagen, 0, 0, 0, 0, $nuevo_ancho, $nuevo_alto, $ancho_orig, $alto_orig);
        imagedestroy($imagen);
        $imagen = $imagen_redim;
    }
    
    // Guardar como JPG
    $resultado = imagejpeg($imagen, $ruta_destino, $calidad);
    imagedestroy($imagen);
    
    return $resultado;
}

// Ejecutar conversión
$ruta_jpg = $directorio . $idUsr . '.jpg';
$resultado = convertirAJPG($fileTmpLoc, $ruta_jpg, $calidad_jpg, $max_ancho, $max_alto);

if ($resultado) {
    echo "✅ Imagen convertida exitosamente a JPG<br>";
    echo "📁 Ubicación: " . $ruta_jpg . "<br>";
    echo "📄 Archivo original: " . $fileName . "<br>";
    echo "📏 Dimensiones: " . $max_ancho . "x" . $max_alto . " (máximo)<br>";
    echo "🎨 Calidad: " . $calidad_jpg . "%<br>";
    
    // Mostrar información del archivo
    $info = getimagesize($ruta_jpg);
    echo "📊 Tamaño final: " . round(filesize($ruta_jpg) / 1024, 2) . " KB<br>";
    echo "📐 Dimensiones finales: " . $info[0] . " x " . $info[1] . " píxeles";
} else {
    echo "❌ Error: No se pudo convertir la imagen a JPG";
}
?>