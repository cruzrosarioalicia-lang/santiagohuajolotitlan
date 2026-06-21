<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>

    <div class="overlay">

        <header>
            <h1>Santiago Huajolotitlan</h1>
            <p>Guaxolotitlán de ayer, Huajolotitlán de hoy</p>
        </header>

        <nav>
            <a href="index.php">Inicio</a>
            <a href="historia.php">Historia</a>
            <a href="costumbres.php">Costumbres</a>
            <a href="turismo.php">Turismo</a>
            <a href="ubicacion.php">Ubicación</a>
            <a href="registrar_persona.php">Registrarse</a>
        </nav>

        <div class="container">
            <div class="content-box">

                <div class="mini-libro" id="libro" onclick="abrirLibro()">
                    <span id="icono">📖</span>

                    <div id="textoLibro">
                        <p>
                            "Hoy sembramos la semilla, una bien la otra mal;
                            una entre piedras buenas, otra entre pedregal, en
                            terrenos preparados, una parte se sembró, otra parte
                            infructuosa, entre piedras se quedó"
                        </p>
                    </div>
                </div>

                <h2>Descripción General</h2>

                <p>
                    Santiago Huajolotitlán es un lugar lleno de historia, cultura y
                    tradiciones que han pasado de generación en generación. Ubicado
                    en el corazón de Oaxaca, este pueblo destaca por la calidez de
                    su gente, sus paisajes naturales y sus costumbres que mantienen
                    viva su identidad.

                    Conocido como “Guaxolotitlán de ayer, Huajolotitlán de hoy”,
                    esta comunidad representa la unión entre el pasado y el presente,
                    conservando sus raíces mientras avanza con el paso del tiempo.

                    Sus festividades, gastronomía, tradiciones religiosas y
                    atractivos turísticos hacen de este lugar un sitio especial para
                    conocer y valorar. Cada rincón de Santiago Huajolotitlán cuenta
                    una historia y refleja el orgullo de su comunidad.
                </p>

                <div class="slider">
                    <button class="prev" onclick="cambiarImagen(-1)">❮</button>

                    <img id="slider-img" src="img/imagen1.jpg" alt="imagen">

                    <button class="next" onclick="cambiarImagen(1)">❯</button>
                </div>

            </div>
        </div>

    </div>

<script src="js/script.js"></script>
<script src="js/libro.js"></script>
</body>
</html>