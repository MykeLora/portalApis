<?php
require('template/header.php');
?>
    <style>
        /* Estilos personalizados para el encabezado */
        .header {
            background-color: #ADD8E6; /* Color de fondo del encabezado */
            padding: 20px 0; /* Espacio interno superior e inferior */
            color: black; /* Color del texto */
            margin: 20px;
        }

        .header h1 {
            font-size: 2rem; /* Tamaño de fuente del título */
            margin-bottom: 0; /* Eliminar el margen inferior */
        }

        .header p {
            font-size: 1rem; /* Tamaño de fuente del texto */
            margin-bottom: 0; /* Eliminar el margen inferior */
        }

        /* Estilos personalizados para las tarjetas de Pokémon */
        .pokemon-card {
            border: 1px solid #ddd; /* Borde de las tarjetas */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
            transition: transform 0.3s ease; /* Transición suave al hacer hover */
        }

        .pokemon-card:hover {
            transform: translateY(-5px); /* Efecto de levantar la tarjeta al hacer hover */
        }

        .pokemon-card-title {
            font-size: 1.5rem; /* Tamaño de fuente del título */
            margin-bottom: 0.5rem; /* Espacio inferior entre el título y el contenido */
        }

        .pokemon-card-img {
            max-width: 100%; /* Imagen ajustada al ancho de la tarjeta */
            border-top-left-radius: 10px; /* Bordes redondeados en la esquina superior izquierda */
            border-top-right-radius: 10px; /* Bordes redondeados en la esquina superior derecha */
        }

        .pokemon-card-text {
            font-size: 1rem; /* Tamaño de fuente del texto */
            color: #555; /* Color del texto */
        }

        .pokemon-icon {
            margin-right: 5px; /* Espacio a la derecha del icono */
        }
    </style>

    <!-- Encabezado -->
    <div class="header text-center">
        <h1>Información de Pokémon</h1>
        <p>Explora datos sobre diferentes Pokémon</p>
    </div>

    <!-- Contenido principal -->
    <div class="container-fluid">
        <div class="row row-cols-2 row-cols-lg-4">
            <?php
            // Array de nombres de Pokémon
            $pokemonNames = ['bulbasaur', 'ivysaur', 'venusaur', 'charmander', 'charmeleon', 'charizard', 'squirtle', 'wartortle', 'blastoise', 'caterpie', 'pikachu'];

            // Iterar sobre los nombres de los Pokémon
            foreach ($pokemonNames as $name) {
                $imageUrl = "https://img.pokemondb.net/artwork/$name.jpg";
                echo '<div class="col">';
                echo '<div class="card mb-3 pokemon-card">';
                // Mostrar la imagen del Pokémon
                echo '<img src="' . $imageUrl . '" class="card-img-top pokemon-card-img" alt="' . ucfirst($name) . '">';
                echo '<div class="card-body">';
                echo '<h2 class="card-title pokemon-card-title"><i class="fas fa-paw pokemon-icon"></i>' . ucfirst($name) . '</h2>';
                // Puedes mostrar más detalles sobre el Pokémon si lo deseas
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

<?php
require('template/footer.php');
?>
