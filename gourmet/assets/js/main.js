(function($){
    $("#store_rating").bind( 'rated', function(){
        console.log('here');
        $(this).rateit( 'readonly', true );

        var form        =   {
            action:         'g_rate_store',
            sid:            $(this).data( 'sid' ),
            rating:         $(this).rateit( 'value' )
        };

        $.post( store_obj.ajax_url, form, function(data){
            
        });
    });
})(jQuery);