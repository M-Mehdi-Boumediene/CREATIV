//recaptcha render
var onloadMetFormCallback = function() {
    var $recaptcha_site_key = jQuery('.recaptcha_site_key');

    $recaptcha_site_key.each(function (indx) {
        var $el = jQuery(this),
            $form = $el.parents('.metform-form-content');

        $el.attr( 'id', $el.attr('id') + '_' + indx );
        grecaptcha.render('recaptcha_site_key' + '_' + indx, {
            'sitekey' : $form.data('site-key')
        });
    });
};


jQuery(document).ready(function($) {

    $(".metform-form-content").submit(function(e) {
        e.preventDefault();

        var form = $(this);

        var formMfInputTel = form.find('.mf-input[type="tel"]');

        formMfInputTel.each(function () {
            var el = $(this),
                num = el.val(),
                code;

            code = el.siblings('.iti__flag-container').find('.iti__selected-dial-code').text();
            el.val( code + num );
        });

        var msg = form.parent().find('.metform-msg');
        var post_url = form.attr("action");
        var form_data = new FormData(this);
        var nonce = form.attr('data-nonce');

        if(msg.length > 1){
            form.parent().find('.metform-inx').remove();
        }

        $.ajax({
            url: post_url,
            type: 'POST',
            dataType: 'JSON',
            data: form_data,
            processData: false,
			contentType: false,
            headers: {
                'X-WP-Nonce': nonce
            },
            success: function (response) {
                //console.log(response);
                var status = Number(response.status);
                var formatedError = '';
                $.each(response.error, function(i, v){
                    formatedError += v + '<br>';
                });
                formatedError.replace(/<br>+$/,'');
                if (status == 1) {
                    msg.css("display","block");
                    msg.removeClass('attr-alert-warning');
                    msg.addClass('attr-alert-success');
                    msg.html(response.data['message']);
                    setTimeout( function(){ 
                        msg.css("display","none");
                    }  , 8000 );

                    // form reset after successfully submitted
                    form.trigger("reset");
                    form.find('select.mf-input').val('').trigger('change');
                    form.find('.mf-input > li').removeClass('selected');
                    form.find('.asRange > .asRange-pointer').css('left','0%');
                    form.find('.asRange > .asRange-selected').css({'left':'0%', 'width':'0%' });

                    //if(form.attr('site_key') != '' && grecaptcha != undefined) grecaptcha.reset();
                    
                } else {
                    msg.css("display","block");
                    msg.removeClass('attr-alert-success');
                    msg.addClass('attr-alert-warning');
                    msg.html(formatedError);
                    setTimeout( function(){ 
                        msg.css("display","none");
                    }  , 8000 );
                }

                if(response.data['hide_form'] != ''){
                    setTimeout( function(){ 
                        form.css('display','none');
                    }  , 2000 );
                }

                if(response.data['redirect_to'] != ''){
                    setTimeout( function(){ 
                        window.location.replace(response.data['redirect_to']);
                    }  , 1500 );
                }
            }
        });


    });
});