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
        // scroll clases

        scrollAnimation( "#clase1", "aparece-izq" );
        scrollAnimation( "#clase2", "aparece-dcha" );

    
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
    var scroll = $(window).scrollTop();

    var distancia_elemento = $(id).offset().top;

    var ventana = $(window).height();

    if(scroll+ventana/2 > distancia_elemento ){
        $(id).addClass(clase);
    }
    else{
        $(id).removeClass(clase);
    }
}


