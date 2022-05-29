jQuery(document).ready(function($) {
    "use strict";

    $('.elementskit-menu-wpcolor-picker').wpColorPicker();
    var IconPicker = $('.elementskit-menu-icon-picker').fontIconPicker();

    var nonce = window.elementskit_megamenu_nonce;

    $('.elementskit-menu-item-save').on( 'click', function(){
        var spinner = $(this).parent().find('.spinner');
        var data = {
            settings: {
                menu_id : $('#elementskit-menu-modal-menu-id').val(),
                menu_has_child : $('#elementskit-menu-modal-menu-has-child').val(),
                
                menu_enable : $('#elementskit-menu-item-enable:checked').val(),
                menu_icon : $('#elementskit-menu-icon-field').val(),
                menu_icon_color : $('#elementskit-menu-icon-color-field').val(),
                menu_badge_text : $('#elementskit-menu-badge-text-field').val(),
                menu_badge_color : $('#elementskit-menu-badge-color-field').val(),
                menu_badge_background : $('#elementskit-menu-badge-background-field').val(),

                mobile_submenu_content_type : $('#mobile_submenu_content_type input[name=content_type]:checked').val(),
            },
            nocache: (Math.floor(Date.now() / 1000))
        }
        // console.log(data.settings);
        spinner.addClass('loading');

        $.ajax({
            url :  window.elementskit.resturl + 'megamenu/save_menuitem_settings',
            type: 'get',
            data : data,
            headers: {
                'X-WP-Nonce': nonce
            },
            dataType: 'json',
            success: function (response) {
                spinner.removeClass('loading');
                // console.log(response);
                $('#elementskit-menu-item-settings-modal').modal('hide');
            }
        });
    });


    $('#elementskit-menu-builder-trigger').on( 'click', function(){
        var menu_id = $('#elementskit-menu-modal-menu-id').val();
        var url = window.elementskit.resturl + 'dynamic-content/content_editor/megamenu/menuitem' + menu_id;

        $("#elementskit-menu-builder-iframe").attr('src', url);
    });

    $("body").on('DOMSubtreeModified', "#menu-to-edit", function() {
        setTimeout(function(){
            $('#menu-to-edit li.menu-item').each(function() {
                var menu_item = $(this);
                if(menu_item.find('.elementskit_menu_trigger').length < 1){
                    $('.item-title', menu_item).append("<a data-attr-toggle='modal' data-target='#attr_menu_control_panel_modal' href='#' class='elementskit_menu_trigger'>Mega Menu</a> ");
                    // console.log(menu_item);
                }
            });
        }, 200);
    });

    $( "#menu-to-edit" ).trigger( "DOMSubtreeModified" );


    $('#menu-to-edit').on('click', '.elementskit_menu_trigger', function(e){
        e.preventDefault();
        var modal = $('#attr_menu_control_panel_modal');
        // modal.addClass('elementskit-menu-modal-loading');
        // add your code here to open the modal by js
        var menu_item = $(this).parents('li.menu-item');
        var id = parseInt(menu_item.attr('id').match(/[0-9]+/)[0], 10);
        var title = menu_item.find('.menu-item-title').text();
        var depth = menu_item.attr('class').match(/\menu-item-depth-(\d+)\b/)[1];

        $('.ekit_menu_control_nav > li').removeClass('attr-active');
        $('.attr-tab-pane').removeClass('attr-active');

        if($(this).parent().find('.is-submenu').is(':hidden') == true){
            var has_child = 0;
            modal.removeClass('elementskit-menu-has-child');
            $('#attr_content_nav').addClass('attr-active');
            $('#attr_content_tab').addClass('attr-active');
        }else{
            var has_child = 1;
            modal.addClass('elementskit-menu-has-child');
            $('#attr_icon_nav').addClass('attr-active');
            $('#attr_icon_tab').addClass('attr-active');
        }


        $('#elementskit-menu-modal-menu-id').val(id);
        $('#elementskit-menu-modal-menu-has-child').val(has_child);

        var data = {
            menu_id : id,
            nocache: (Math.floor(Date.now() / 1000))
        }

        $.ajax({
            url :  window.elementskit.resturl + 'megamenu/get_menuitem_settings',
            type: 'get',
            data : data,
            headers: {
                'X-WP-Nonce': nonce
            },
            dataType: 'json',
            success: function (response) {
                //console.log(response);
                $('#elementskit-menu-item-enable').prop('checked', false);
                $('#elementskit-menu-icon-color-field').wpColorPicker('color', response.menu_icon_color);
                $('#elementskit-menu-icon-field').val(response.menu_icon);
                $('#elementskit-menu-badge-text-field').val(response.menu_badge_text);
                $('#elementskit-menu-badge-color-field').wpColorPicker('color', response.menu_badge_color);
                $('#elementskit-menu-badge-background-field').wpColorPicker('color', response.menu_badge_background);

                if(typeof response.menu_enable !== undefined && response.menu_enable == 1){
                    $('#elementskit-menu-item-enable').prop('checked', true);
                }else{
                    $('#elementskit-menu-item-enable').prop('checked', false);
                }

                $('#mobile_submenu_content_type input').prop('checked', false);
                if(typeof response.mobile_submenu_content_type === undefined || response.mobile_submenu_content_type == 'builder_content'){
                    $('#mobile_submenu_content_type input[value=builder_content]').prop('checked', true);
                }else{
                    $('#mobile_submenu_content_type input[value=submenu_list]').prop('checked', true);
                }
                
                $( "#elementskit-menu-item-enable" ).trigger( "change" );

                IconPicker.refreshPicker();
                setTimeout(function(){
                    modal.removeClass('elementskit-menu-modal-loading');
                }, 500);
            }
        });
    });

    $('#elementskit-menu-item-enable').on('change', function(){
        if($(this).is(':checked')){
            $('#elementskit-menu-builder-trigger').prop('disabled', false);
            $('#elementskit-menu-builder-warper').addClass('is_enabled');
        }else{
            $('#elementskit-menu-item-enable').prop('checked', false);
            $('#elementskit-menu-builder-warper').removeClass('is_enabled');
            $('#elementskit-menu-builder-trigger').prop('disabled', true);
        }
    });

    $('#post-body-content').on('change', '#elementskit-menu-metabox-input-is-enabled', function(){
        //console.log($(this).is(':checked'));
        if($(this).is(':checked')){
            $('body').addClass('is_mega_enabled').removeClass('is_mega_disabled');
        }else{
            $('body').removeClass('is_mega_enabled').addClass('is_mega_disabled');
        }
    });
    
    $('#post-body-content')
        .prepend(window.elementskit_options_megamenu_markup)
        .find('#elementskit-menu-metabox-input-is-enabled')
        .trigger( "change" );

});