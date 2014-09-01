jQuery(function($){

    $('#menutoggle').on("click", (function(){

        var rel = $(this).data('rel');

        if(!rel){

            $('#template-option').toggle('slow', function(){
                $(this).animate({'right' : '-200px;' });
            });

            $(this).attr('data-rel', 'hide');

            // $('#template-option').animate({'right':'-200px'}).fadeOut('low');
            // $('#template-content').animate({'width': 'auto'});


        }
        else
        {
            $('#template-option').toggle('slow');
        }

    }));


});