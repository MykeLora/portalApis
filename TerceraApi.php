<?php require('template/header.php'); ?>

    <style>
        .header {
            background-color: #343a40; /* Color de fondo del encabezado */
            padding: 20px 0; /* Espacio interno superior e inferior */
            color: #fff; /* Color del texto */
            margin: 20px;
            border-radio: 2px;
        }

        .header h1 {
            font-size: 2rem; /* Tamaño de fuente del título */
            margin-bottom: 0; /* Eliminar el margen inferior */
        }

        .header p {
            font-size: 1rem; /* Tamaño de fuente del texto */
            margin-bottom: 0; /* Eliminar el margen inferior */
        }

    </style>


    <div class="container mt-5">
        <h1 class="header text-center">Galería de Perros Aleatorios</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            // Realizar una solicitud a la API de The Dog API para obtener 10 imágenes aleatorias
            $response = file_get_contents('https://api.thedogapi.com/v1/images/search?limit=10');
            $data = json_decode($response, true);

            // Iterar sobre cada imagen y mostrarla en una tarjeta
            foreach ($data as $dog) {
                echo '<div class="col">';
                echo '<div class="card">';
                echo '<img class="card-img-top" src="' . $dog['url'] . '" alt="Imagen de Perro">';
                echo '<div class="card-body">';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

<?php require('template/footer.php'); ?>
