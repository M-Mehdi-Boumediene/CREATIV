(function ($) {
    setTimeout(function () {
        // Home search form, footer select fields (must happen after setting currency from url param)
        $("#deal, #currency-select, #qtranxs_select_qtranslate-2-chooser").select2({
            minimumResultsForSearch: Infinity
        });


        $('#cty').select2({
            language: "fr",
            placeholder: "OÃ¹"
        }).on("change", function (e) {
            event.stopPropagation();

        })
        $("#loader").fadeOut("slow");
    }, 500);



})(jQuery);