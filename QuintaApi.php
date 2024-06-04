<?php
require('template/header.php');
?>
    <style>
         /* Estilos personalizados para el encabezado */
         .header {
            background-color: #343a40; /* Color de fondo del encabezado */
            padding: 20px 0; /* Espacio interno superior e inferior */
            color: #fff; /* Color del texto */
            margin: 15px;
        }

        .header h1 {
            font-size: 2rem; /* Tamaño de fuente del título */
            margin-bottom: 0; /* Eliminar el margen inferior */
        }

        .header p {
            font-size: 1rem; /* Tamaño de fuente del texto */
            margin-bottom: 0; /* Eliminar el margen inferior */
        }

        /* Estilos personalizados para las tarjetas */
        .card {
            border: 1px solid #ccc; /* Borde de las tarjetas */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra */
            transition: transform 0.3s ease; /* Transición suave al hacer hover */
        }

        .card:hover {
            transform: translateY(-5px); /* Efecto de levantar la tarjeta al hacer hover */
        }

        .card-title {
            font-size: 1.2rem; /* Tamaño de fuente del título */
            margin-bottom: 0.5rem; /* Espacio inferior entre el título y el contenido */
        }

        .card-text {
            font-size: 1rem; /* Tamaño de fuente del texto */
            color: #555; /* Color del texto */
        }

        .icon {
            margin-right: 5px; /* Espacio a la derecha del icono */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="header text-center">
            <h1>Información de Países</h1>
            <p>Explora datos sobre diferentes países del mundo</p>
        </div>
        <div class="row row-cols-2 row-cols-lg-4">
            <?php
            // Consulta a la API de REST Countries
            $response = file_get_contents('https://restcountries.com/v3/all');
            $data = json_decode($response, true);

            // Iterar sobre los datos de los países
            foreach ($data as $country) {
                echo '<div class="col">';
                echo '<div class="card mb-3">';
                echo '<div class="card-body">';
                echo '<h2 class="card-title"><i class="fas fa-flag icon"></i>' . $country['name']['common'] . '</h2>';

                // Verificar si la clave 'capital' está definida antes de intentar acceder a ella
                if (isset($country['capital'])) {
                    echo '<p class="card-text"><i class="fas fa-building icon"></i> Capital: ' . $country['capital'][0] . '</p>';
                } else {
                    echo '<p class="card-text"><i class="fas fa-building icon"></i> Capital: No disponible</p>';
                }

                echo '<p class="card-text"><i class="fas fa-users icon"></i> Población: ' . $country['population'] . '</p>';
                // Puedes mostrar más datos según tus necesidades
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
