(function() {
    // https://dashboard.emailjs.com/admin/integration
    emailjs.init('QZWWY_lCq-0YXXqML');

})();
window.onload = function() {
    // 'contact-form' debe ser el ID de tu FORMULARIO
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        // ocultar boton
        $(".send").css({"display":"none"});

        event.preventDefault();
        emailjs.sendForm('service_jz2b98l', 'template_oi2np0e', this)
            .then(function(success) {
                console.log('SUCCESS!');
                console.log(success);
                // Aquí podríamos cambiar el mensaje de envío de correo con éxito por el formulario
                $("#contact-form").css({"display":"none"})
                $("#exito").css({"display":"block"})
            }, function(error) {
                console.log('FAILED...', error);
                $(".send").css({"display":"block"});

        });
    });
}
