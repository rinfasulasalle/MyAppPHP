<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi aplicacion Web </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }
        .header {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
            margin: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #343a40;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-4">
        <div class="header">
            <h1>Trabajo de desarrollo en PHP</h1>
            <p>Nombre del Estudiante: Roger Infa Sanchez</p>
            <p>Correo: rinfas@ulasalle.edu.pe </p>
            <p>Fecha: 12 de Agosto, 2023</p>
        </div>
        <div class="content">
            <h2>Proyecto Desarrollado en PHP en Linux Ubuntu 20.04</h2>
            <p>En este proyecto, se creó una aplicación web utilizando un stack tecnológico compuesto por PHP, MySQL, HTML, CSS y JavaScript. Además, se aprovechó el framework Bootstrap para mejorar el diseño y la apariencia de la aplicación.</p>
            
            <h3>Desarrollo del Proyecto</h3>
            <p>El proceso de desarrollo se llevó a cabo en una máquina con el sistema operativo Linux Ubuntu 20.04. A pesar de las limitaciones de utilizar solo el editor de texto Gedit, se logró implementar una aplicación funcional y atractiva.</p>
            <p>Se utilizó PHP para manejar la lógica del backend, interactuando con la base de datos MySQL para almacenar y recuperar información. HTML y CSS se emplearon para la estructura y el estilo de la interfaz de usuario, mientras que JavaScript se utilizó para agregar interactividad.</p>
            
            <h3>Dificultades y Superación</h3>
            <p>El desarrollo del proyecto presentó desafíos, especialmente al utilizar un editor de texto simple como Gedit en lugar de un entorno de desarrollo integrado (IDE) más robusto. Sin embargo, esta experiencia fortaleció las habilidades de programación y resolución de problemas, demostrando que es posible crear proyectos significativos con herramientas básicas.</p>
            
            <h3>Conclusiones</h3>
            <p>En mi opinión, PHP sigue siendo una opción valiosa para el desarrollo web en la actualidad. Aunque han surgido numerosos lenguajes y frameworks, PHP tiene una larga trayectoria, una gran comunidad de desarrolladores y una amplia documentación. Su versatilidad para crear aplicaciones web dinámicas y su capacidad para integrarse con bases de datos lo convierten en una elección sólida.</p>
            <p>A pesar de las críticas que ha recibido en el pasado, PHP ha evolucionado y mejorado significativamente con el tiempo, introduciendo características modernas y adoptando buenas prácticas de desarrollo. Su facilidad de aprendizaje y la posibilidad de crear aplicaciones de manera eficiente lo hacen adecuado para una variedad de proyectos, desde pequeñas aplicaciones hasta sitios web complejos.</p>
            <p>En resumen, el proyecto desarrollado en PHP en Linux Ubuntu 20.04 demuestra que esta tecnología sigue siendo relevante y capaz de ofrecer soluciones efectivas en el panorama actual de desarrollo web.</p>
        </div>

       <?php include 'footer.php'; ?>
        
    </div>
</body>
</html>

