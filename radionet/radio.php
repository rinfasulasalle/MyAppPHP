<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio en Vivo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos adicionales */
        .radio-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        .radio-title {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* Proporción 16:9 */
            height: 0;
            overflow: hidden;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .live-indicator {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <div class="radio-container">
            <h1 class="radio-title">Radio en Vivo</h1>
            <div class="video-container">
                <!-- Reproductor de video en vivo de YouTube -->
                <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/HPiv1pzIPRc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <p class="mt-3">
                ¡Sintoniza nuestra emocionante radio en vivo llena de música, noticias y charlas interesantes!
                <span class="live-indicator">En Vivo Ahora</span>
            </p>
            <p>Envía tus saludos y solicitudes en tiempo real a través del chat.</p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>

