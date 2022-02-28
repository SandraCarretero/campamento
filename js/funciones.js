
$(function(){
    $(".carga").addClass("hecha")
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
    
    // scroll clases y personas
    $(window).scroll(function(){
        scrollAnimation( "#animacion", "aparece-izq" );
        scrollAnimation( "#animacion2", "aparece-dcha" );
        scrollAnimation( "#nosotros", "vertical" );

        
    });

    


    // click pop persona
    $(".persona").click( function(){
        $(".pop").addClass("open");

    });
    $(".fondo").click( function(){
        $(".pop").removeClass("open");
        
    });



    // hamburguesa
    $(".hamburguer").click( function(){
        console.log("clic")
        $(".hamburguer").toggleClass("cruz");
        $(".menu-mobile").toggleClass("open")

    });


    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        console.log("scroll:"+scroll);

        var height = $(document).height();
        console.log("altura:"+height);

        var ventana =$(window).height();
        console.log("altura ventana:"+ventana);

        var scrollMax = height - ventana;

        var carga = 100 * scroll / scrollMax

        $(".scroll").css({"width": carga+"%"})

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
    console.log("altura ventana:"+ventana);

    // si el scroll es mayor que la distancia del elemento, añadimos clase
    if(scroll+ventana > distancia_elemento ){
        $(id).addClass(clase);
    }
    // para quitarlo al subir 
    else{
        $(id).removeClass(clase);
    }
}


