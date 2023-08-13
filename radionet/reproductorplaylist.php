<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor de Playlist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos adicionales */
        .playlist-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        .playlist-title {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .playlist-item {
            cursor: pointer;
            transition: background-color 0.2s;
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .playlist-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        .playlist-item:hover {
            background-color: #333;
        }
        .player-container {
            text-align: center;
            margin-top: 30px;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <div class="playlist-container">
            <h1 class="playlist-title">Reproductor de Playlist</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2>Lista de Reproducción</h2>
                    <ul class="list-group">
                        <?php
                        $mp3Files = glob('mp3/*.mp3');
                        foreach ($mp3Files as $mp3File) {
                            $fileName = basename($mp3File);
                            echo '<li class="list-group-item playlist-item" onclick="playAudio(\'' . $fileName . '\')">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1214/1214675.png" alt="Icono de Música">
                                    ' . $fileName . '
                                  </li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Reproductor</h2>
                    <div class="player-container">
                        <audio id="audioPlayer" controls>
                            Tu navegador no soporta el elemento de audio.
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function playAudio(fileName) {
            var audioPlayer = document.getElementById('audioPlayer');
            audioPlayer.src = 'mp3/' + fileName;
            audioPlayer.play();
        }
    </script>
    <?php include 'footer.php'; ?>
</body>
</html>

