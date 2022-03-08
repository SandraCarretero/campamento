if ( window.history.replaceState) {
    window.history.replaceState( null, null, window.location.href);
}


// carga
// cuando estén vargadas imágenes. vídeos quitar pantalla de carga

$(window).on("load", function(){

    setTimeout( function(){
        // retrasar un tiempo una accion
        $(".carga").fadeOut(500);
    }, 700 )
})


// elementos del DOM estén listos para ser accedidos
$(function(){
    $(window).scroll(function(){
        var alto = $(window).scrollTop();
        // console.log(alto);
        if(alto > 70){
            $(".nav").addClass("change");
        }
        else{
            $(".nav").removeClass("change");
        }
        
        
    });

    $(".mensaje").addClass("appear")
    // cookies
    $("button").click( function(){
        console.log("clic")
        $(".mensaje").removeClass("appear")
    });
    
    // scroll clases y personas
    $(window).scroll(function(){
        scrollAnimation( "#animacion", "aparece-izq" );
        scrollAnimation( "#animacion2", "aparece-dcha" );
        scrollAnimation( "#nosotros", "vertical" );
        scrollAnimation( "#nosotros2", "vertical" );

    });



    // hamburguesa
    $(".hamburguer").click( function(){
        console.log("clic")
        $(".hamburguer").toggleClass("cruz");
        $(".menu-mobile").toggleClass("open");

    });


    


    // barra de scroll
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        // console.log("scroll:"+scroll);

        var height = $(document).height();
        // console.log("altura:"+height);

        var ventana = $(window).height();
        // console.log("altura ventana:"+ventana);

        var scrollMax = height - ventana;

        var carga = 100 * scroll / scrollMax

        $(".scroll").css({
            "width": carga+"%"
            });

    });


    // mover fondo header
    $("#header").mousemove(function(e){
        console.log(e.pageX, e.pageY)
        $("#header").css({
            "background-position-x": 70 +e.pageX/90 +"%",
            "background-position-y": 70 +e.pageY/90 +"%",
        });
    });
   

    // click talleres
    $(window).resize(function(){

        if ($(window).width() <= 1023) {  
 
            $(".card").click( function(){
                console.log("clic");
                $(".card").removeClass("rotate");
                $(this).toggleClass("rotate");
            });
        };     
    });
 
 


});





function scrollAnimation( id, clase ) {
    console.log($(id).length);
    if($(id).length==0){
        return
    }
    // indica cantidad de pixeles que hacemos scroll
    var scroll = $(window).scrollTop();
      
    // cantidad de pixeles de distancia del objeto animado con respecto del top del documento
    // .top para obtener solo esa propiedad
    var distancia_elemento = $(id).offset().top;

    // para sumar o restar la altura de las cajas
    var ventana = $(window).height();
    // console.log("altura ventana:"+ventana);

    // si el scroll es mayor que la distancia del elemento, añadimos clase
    if(scroll+ventana > distancia_elemento ){
        $(id).addClass(clase);
    }
    // para quitarlo al subir 
    else{
        $(id).removeClass(clase);
    }
}


    