<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar Persona</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>

<body>

    <div class="overlay">

        <header>
            <h1>Santiago Huajolotitlán</h1>
            <p>Registro de Personas</p>
            <h1>PRUEBA REGISTRO</h1>
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

                <h2>Registro de Persona</h2>

                <form action="conexion.php" method="POST">

                    <label>Nombre:</label><br>
                    <input type="text" name="nombre" required><br><br>

                    <label>Apellido Paterno:</label><br>
                    <input type="text" name="apellido_paterno" required><br><br>

                    <label>Apellido Materno:</label><br>
                    <input type="text" name="apellido_materno" required><br><br>

                    <label>Sexo:</label><br>
                    <select name="sexo" required>
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select><br><br>

                    <label>Código Postal:</label><br>
                    <input type="text" name="codigo_postal" required><br><br>

                    <label>Entidad:</label><br>
                    <input type="text" name="entidad" required><br><br>

                    <label>Municipio:</label><br>
                    <input type="text" name="municipio" required><br><br>

                    <button type="submit">Registrar</button>

                </form>

            </div>
        </div>

    </div>

</body>

</html>