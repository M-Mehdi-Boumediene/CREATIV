var $j = jQuery.noConflict();

$j(document).ready(function($){
    initMFLike();
});

function initMFLike(){
    $j(document).on('click','.mf-like', function() {

        var $likeLink = $j(this);
        var $id = $j(this).attr('id');

        if($likeLink.hasClass('liked')) return false;

        var $dataToPass = {
            action: 'mf_like',
            likes_id: $id
        }

        var like = $j.post(mfLike.ajaxurl, $dataToPass, function(data){
            $likeLink.html(data).addClass('liked').attr('title','You already like this!');
            $likeLink.find('span').css('opacity',1);
        });

        return false;
    });
}