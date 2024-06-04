<?php
require('template/header.php');
?>

    <style>

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
        .container {
            margin-top: 50px;
        }
        .card {
            max-width: 300px; 
            margin-bottom: 20px;
        }
        .card img {
            width: 300px;
            height: 350px;
            object-fit: cover;
        }
    </style>


    
<div class="container">
        <div class="header text-center">
            <h1>Rick and Morty</h1>
            <p>Explora información sobre la serie Rick and Morty</p>
        </div>
        
        <!-- Cards para mostrar la información del personaje -->
        <?php
        // URL de la API de Rick and Morty
        $url = 'https://rickandmortyapi.com/api/character';
        // Realizar la solicitud a la API
        $response = file_get_contents($url);
        // Decodificar la respuesta JSON
        $data = json_decode($response, true);
        // Mostrar los personajes si se recibieron datos válidos
        if ($data && isset($data['results'])) {
            $characters = $data['results'];
            // Iterar sobre los personajes agrupándolos en grupos de tres
            for ($i = 0; $i < count($characters); $i += 3) {
                echo "<div class='row'>";
                // Iterar sobre cada grupo de tres personajes
                for ($j = $i; $j < min($i + 3, count($characters)); $j++) {
                    $character = $characters[$j];
                    echo "<div class='col-md-4'>";
                    echo "<div class='card'>";
                    echo "<img src='{$character['image']}' class='card-img-top img-fluid' alt='Imagen de {$character['name']}'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'><strong>{$character['name']}</strong></h5>";
                    echo "<p class='card-text'><strong>Especie:</strong> {$character['species']}</p>";
                    echo "<p class='card-text'><strong>Género:</strong> {$character['gender']}</p>";
                    echo "<a href='#' class='btn btn-primary'><i class='fas fa-info-circle'></i> Detalles</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            }
        } else {
            echo "<p>Error al obtener datos de los personajes</p>";
        }
        ?>
    </div>

<?php
require('template/footer.php');
?>
