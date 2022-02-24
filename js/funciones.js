$(function(){
    // scroll nav
    $(window).scroll(function(){
        var alto = $(window).scrollTop();
        // console.log(alto);
        if(alto > 100){
            $(".nav").addClass("change");
        }
        else{
            $(".nav").removeClass("change");
        }
        
        
    });
    
    $(window).scroll(function(){
        // scroll clases
    
        scrollAnimation( "#animacion", "aparece-izq" );
        scrollAnimation( "#animacion2", "aparece-dcha" );
        
    });
    







    // click pop persona
    $(".persona").click( function(){
        $(".pop").addClass("open");

    });
    $(".fondo").click( function(){
        $(".pop").removeClass("open");
        
    });

});


function scrollAnimation( id, clase ) {
    // indica cantidad de pixeles que hacemos scroll
    var scroll = $(window).scrollTop();
      
    // cantidad de pixeles de distancia del objeto animado con respecto del top del documento
    // .top para obtener solo esa propiedad
    var distancia_elemento = $(id).offset().top;

    // para sumar o restar la altura de las cajas
    var ventana = $(window).height();
    console.log("altuta ventana:"+ventana);

    // si el scroll es mayor que la distancia del elemento, añadimos clase
    if(scroll+ventana > distancia_elemento ){
        $(id).addClass(clase);
    }
    // para quitarlo al subir 
    else{
        $(id).removeClass(clase);
    }
}


