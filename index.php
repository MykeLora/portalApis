<?php
require('template/header.php');
?>

    <style>
        /* Estilos adicionales */
        body {
            background-color: #f8f9fa;
        }
        .profile-card {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .profile-title {
            font-size: 18px;
            color: #6c757d;
            margin-bottom: 20px;
        }
        .contact-links a {
            display: inline-block;
            margin-right: 10px;
            color: #212529;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .contact-links a:hover {
            color: #007bff;
        }
    </style>

    <div class="container">
        <div class="profile-card text-center">
            <img class="profile-picture" src="foto 2x2.jpg" alt="Foto de Perfil">
            <div class="profile-name">Maycol Lora Caceres</div>
            <div class="profile-title">Desarrollador Web Full Stack</div>
            <div class="contact-links">
                <a href="mailto:mykelora@gmail.com"><i class="fas fa-envelope"></i> Email</a>
                <a href="https://wa.me/8295225842"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                <a href="https://github.com/MykeLora"><i class="fab fa-github"></i> Github</a>
            </div>
        </div>
    </div>

<?php
require('template/footer.php');
?>
