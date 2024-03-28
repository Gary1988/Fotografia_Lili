<?php
// enviar.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Aquí puedes procesar los datos, como enviar un email o guardarlos en una base de datos.
    // Por ejemplo, para enviar un correo electrónico podrías usar la función mail() de PHP:
    $para = 'tuemail@example.com'; // Cambia esto por tu dirección de correo electrónico
    $asunto = 'Nuevo mensaje de mi sitio web';
    $contenido = "Has recibido un nuevo mensaje de: $nombre\n".
                 "Email: $email\n".
                 "Mensaje:\n$mensaje";

    // Asegúrate de que el servidor soporte la función mail y de configurar correctamente los encabezados.
    // mail($para, $asunto, $contenido);
}
?>
