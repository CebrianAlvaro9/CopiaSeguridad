      
        $(document).ready(function(){

            $("#mostrar_panel").toggle(

                function(e){
                    $('#panel-oculto').slideDown();
                    $(this).val('Cerrar panel');
                },
                function(e){
                    $('#panel-oculto').slideUp();
                    $(this).val('Mostrar panel');
            }
        );

    });
       