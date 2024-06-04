<?php
require('template/header.php');?>



    <!-- Encabezado -->
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container">
            <h1 class="text-center">Exploración Espacial - Imágenes de la NASA</h1>
        </div>
    </div>

    <!-- Contenido principal -->
    <!-- Contenido principal -->
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            // API Key de la NASA
            $apiKey = "ZU1imILr3xlgUb3g5DALNiFtfXVdoQ7sOzZF8Kz1";

            // Número máximo de imágenes a mostrar
            $maxImages = 10;

            // URL base de la API de la NASA para obtener imágenes del espacio
            $baseUrl = "https://api.nasa.gov/planetary/apod?api_key=$apiKey&count=$maxImages";

            // Consulta a la API de la NASA para obtener múltiples imágenes
            $response = file_get_contents($baseUrl);
            $data = json_decode($response, true);

            // Iterar sobre cada imagen y mostrarla en una tarjeta
            foreach ($data as $image) {
                echo '<div class="col">';
                echo '<div class="card">';
                echo '<img src="' . $image['url'] . '" class="card-img-top" alt="Imagen del Espacio">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $image['title'] . '</h5>';
                echo '<p class="card-text">' . $image['explanation'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    
<?php
require('template/footer.php');?>