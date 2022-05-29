(function($) {
    $(document);

    jQuery("#add-alert").click(function() {
        var formData = jQuery('#prop-search').serialize();
        jQuery.post(
            ajaxurl,
            {
                'action': 'create_alert',
                'data': formData,
            },
            function(response) {



                if(!response.loginstatus)
                {  /*
                        $('#success, #duplicate, #limit').removeClass('show');
                        $('#login').addClass('show');
                        $('#modal-trigger').trigger('click');
                        */
                    window.location.href = response.redirect;
                }
                else
                {
                    if(response.status ==='limit')
                    {
                        $('#duplicate, #login, #success').removeClass('show');
                        $('#limit').addClass('show');
                        $('#modal-trigger').trigger('click');
                    }
                    else if(response.status) {
                        $('#duplicate, #login, #limit').removeClass('show');
                        $('#success').addClass('show');
                        $('#modal-trigger').trigger('click');
                    }
                    else {
                        $('#success, #login, #limit').removeClass('show');
                        $('#duplicate').addClass('show');
                        $('#modal-trigger').trigger('click');
                    }

                }

            }
        );
        return false
    });

    jQuery(".del-alert").click(function() {


        jQuery.post(
            ajaxurl,
            {
                'action': 'delete_alert',
                'alert_id': $(this).attr('data-id'),
                'user_id': $(this).attr('data-user-id')
            },
            function(response) {


                if(response)
                {
                    $('#success').addClass('show');
                    $('#modal-trigger').trigger('click');
                    // location.reload();
                }


            }
        );
        return false
    });



}(jQuery));