<?php
    // TRAEMOS EL PHP
    // viene el FORM de CONTACTO?
    // print_r($_POST);
    // partimos de la base de que no se ha enviado
    $envioMail = false;

    
    if( 
        // isset es si existen las variables
        isset($_POST["name"]) && 
        isset($_POST["apellido"]) &&
        isset($_POST["email"]) &&
        isset($_POST["mensaje"])

    ){
        // lo que hacemos si hay informacion enviada del FORM
        $nombre = $_POST["name"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];
        
    
        $to = "sandracarretero24@gmail.com";
    
        $subject = "Consulta en la web";
    
        $message = "<html> 
                    <head></head>
                    <body>
                        <h1>Consulta en la web </h1>
                        <p> $mensaje </p>
                    </body>
        
                    </html>";
    
    
        $headers = "MINE-Version: 1.0 \r\n";
    
        $headers .="Content-type:text/html:charset=UTF-8 \r\n" ;
        $headers .= "From: $email \r\n ";
    
        
        $envioMail = mail($to, $subject, $message, $headers);

    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&family=Quicksand:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</head>
<body>

    <div class="carga">
        <div class="loader">
            
        </div>
    </div>

    
    <nav class="nav main-padding">
      <div class="logo">

      </div>
      <div class="menu">
          <ul>
              <a href="index.html"><li>Campamento</li></a>
              <a href="talleres.html"><li>Talleres</li></a>
              <a href="nosotros.html"><li>Sobre nosotros</li></a>
              <a href="contacto.php"><li>Contacto</li></a>
          </ul>
      </div>
      <div class="menu-mobile">
        <ul>
            <a href="index.html"><li>Campamento</li></a>
            <a href="talleres.html"><li>Talleres</li></a>
            <a href="nosotros.html"><li>Sobre nosotros</li></a>
            <a href="contacto.php"><li>Contacto</li></a>
        </ul>
    </div>
      <div class="hamburguer">
        <div class="line uno"></div>
        <div class="line dos"></div>
        <div class="line tres"></div>
    </div>
    </nav>

    <header id="header" class="header_contacto main-padding">
        <h1>Contacto</h1>
    </header>

    

    <div class="formulario main-padding">

    <?php
        if($envioMail == true){
    ?>
        <div class="exito">
            <div class="mensaje">
                <h4>¡Gracias por contactar con nosotros!</h4> 
                <p>Tu correo ha sido enviado con éxito. Te contestaremos lo antes posible.</p>
            </div>
        </div>
    <?php

        }else{
    ?>

        <form action="" method="POST">
            <div class="nombre">
                <label for="name">Tu nombre</label>
                <input type="text" name="name" id="name" placeholder="Escribe tu nombre" autocomplete="off">
                <div class="recta"></div>
            </div>

            <div class="apellido">
                <label for="apellido">Tus apellidos</label>
                <input type="text" name="apellido" id="name" placeholder="Escribe tus apellidos" autocomplete="off">
                <div class="recta"></div>
            </div>

            <div class="correo">
                <label for="email">Tu email</label>
                <input type="email" name="email" id="email" placeholder="Escribe tu email" autocomplete="off">
                <div class="recta"></div>
            </div>

            <div class="consulta">
                <label for="consulta">Consulta</label>
                <textarea placeholder="Escribe tu mensaje" name="mensaje" id="consulta" cols="30" rows="8" type="mensaje"></textarea>
                <div class="recta"></div>
            </div>

            <button type="submit">
                Enviar <i class="fas fa-arrow-right"></i>
            </button>
            
        </form>
    <?php
    }
    ?>


        <div class="mapa">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12149.493594549376!2d-3.7130592500000006!3d40.42273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1645603797107!5m2!1ses!2ses" width="100%"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="redes">
            <a href="https://es-es.facebook.com/"><img src="svg/facebook-brands.svg" alt=""></a>
            <a href="https://www.instagram.com/?hl=es"><img src="svg/instagram-brands.svg" alt=""></a>
            <a href="https://es.linkedin.com/"><img src="svg/linkedin-in-brands.svg" alt=""></a>
            <a href="https://twitter.com/?lang=es"><img src="svg/twitter-brands.svg" alt=""></a>
        </div>
        <div class="copy">
            <span>© campamento | todos los derechos reservados</span>
        </div>
    </footer>

    <div class="scroll">
      
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="js/funciones.js"></script>

</body>
</html>