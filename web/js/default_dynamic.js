



function ajaxSubmitCommentForm(){
    "use strict";

    var options = {
        success: function(){
            $j("#commentform textarea").val("");
            $j("#commentform .success p").text("Comment has been sent!");
        }
    };

    $j('#commentform').submit(function() {
        $j(this).find('input[type="submit"]').next('.success').remove();
        $j(this).find('input[type="submit"]').after('<div class="success"><p></p></div>');
        $j(this).ajaxSubmit(options);
        return false;
    });
}
var header_height = 85;
var min_header_height_scroll = 57;
var min_header_height_sticky = 60;
var scroll_amount_for_sticky = 85;
var content_line_height = 60;
var add_for_admin_bar = 0;

var logo_height = 130; // theme13 logo height
var logo_width = 280; // theme13 logo width
header_top_height = 0;


var geocoder;
var map;

function initialize() {
    "use strict";
    // Create an array of styles.
    var mapStyles = [
        {
            stylers: [
                {hue: "#324156" },
                {saturation: -60},
                {lightness: -20},
                {gamma: 1.51}
            ]
        }
    ];
    var mfMapType = new google.maps.StyledMapType(mapStyles,
        {name: "MF Map"});

    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    var myOptions = {
        zoom: 12,
        scrollwheel: false,
        center: latlng,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL,
            position: google.maps.ControlPosition.RIGHT_CENTER
        },
        scaleControl: false,
        scaleControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        streetViewControl: false,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        panControl: false,
        panControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        mapTypeControl: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'mf_style'],
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            position: google.maps.ControlPosition.LEFT_CENTER
        },
        mapTypeId: 'mf_style'
    };
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    map.mapTypes.set('mf_style', mfMapType);
}

function codeAddress(data) {
    "use strict";

    if (data === '')
        return;

    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<div id="bodyContent">'+
        '<p>'+data+'</p>'+
        '</div>'+
        '</div>';
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    geocoder.geocode( { 'address': data}, function(results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            map.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
                map: map,
                position: results[0].geometry.location,
                title: data['store_title']
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
            //infowindow.open(map,marker);
        }
    });
}

var $j = jQuery.noConflict();

$j(document).ready(function() {
    "use strict";

    showContactMap();
});

function showContactMap() {
    "use strict";

    if($j("#map_canvas").length > 0){
        initialize();
        codeAddress("");
        codeAddress("");
        codeAddress("");
        codeAddress("");
        codeAddress("");
    }
}

var no_ajax_pages = [];
var root = 'https://www.marcfoujols.com/';
var mf_root = 'https://www.marcfoujols.com/';
var theme_root = 'https://www.marcfoujols.com/wp-content/themes/marcfoujols/';
var parallax_speed = 1;
var header_style_admin = "dark";
no_ajax_pages.push('');