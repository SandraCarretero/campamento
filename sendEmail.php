<!-- verlo en http://localhost:8848 -->

<!-- 
    1. etiquetas FORM e IMPUTS 
        siempre tiene que haber button/input de tipo submit
        en imputs, textarea, select siempre tener name (diferentes)
        en form añadir action y method 
            ACTION donde enviamos los datos
                --si está vacío se envía a la misma página
                --lo vinculamos al php (GET)

    2. peticiones GET o POST, si en method no ponemos nada es GET
        2.1 GET :   pedir información al servidor (búsqueda, filtrado...)

                dominio.com?variable=dato&variable2=dato2...
                TODA LA INFO VA A LA URL, no usar para login, registro...

        2.2 POST    :   dar información al servidor (login, registro, envío de info)... siempre que la info sea importante

                TODA LA INFO VA EN EL CUERPO DE LA PETICIÓN (no visible)
                podemos  enviar más info que con GET (vídeos, imágenes, pdf...)

    3. recibir DATOS de la petición (PHP)
    4. ENVIAR correo
-->

<!-- etiqueta php -->


<?php
    // código php
    // $_GET   $_POST (variable ya hecha)

    $nombrevariable = 3;


    // imprimir algo por pantalla sencillo
    // como el console.log de js, aquí se vería el 3
    echo $nombrevariable;


    // imprimir cosas por pantalla: Arrays y Objetos (lista de cosas)
    // VA A SALIR TODO LO QUE HEMOS ENVIADO EN EL FORM
        // Array ( [name] => Sandra [apellido] => Carretero [email] => sandracarretero24@alumnostrazos.net [mensaje] => Ahora con POST )

                // array es una lista de cosas

    print_r($_POST);


    // recogemos variables post

    // variables para no poner un nombre tan largo abajo
    $nombre = $_POST["name"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    

    // print_r($_POST["name"]); $_POST["name"] lo sustituyo con la variable
    // para que se vea en pantalla
    // print_r($nombre);


    // enviar correo

    // receptor
    $to = "sandracarretero24@gmail.com";

    // asunto
    $subject = "Consulta en la web";

    // mensaje html
    $message = "<html> 
                <head></head>
                <body>
                    <h1>Consulta en la web </h1>
                    <p> $mensaje </p>
                </body>
    
                </html>";

    // cabeceras del correo
    $headers = "MINE-Version: 1.0 \r\n";
    // con el . cojo lo que habia antes en headers y suma lo que viene ahora "nuevo.."
    // recibe html y no texto plano
    $headers .="Content-type:text/html:charset=UTF-8 \r\n" ;
    $headers .= "From: $email \r\n ";

    // ponemos en mail todas las variables
    // TRUE si envía correo FALSE si no lo ha enviado
    
    $envioMail = mail($to, $subject, $message, $headers);
    
    if ($envioMail){
        echo "Correo enviado con éxito";
    }

?>