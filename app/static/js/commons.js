function addSound(){
    var $addSoundModal = $('#add-sound.modal'),
        $input         = $addSoundModal.find('input#url'),
        $submitBtn     = $addSoundModal.find('#submit-sound');
        
    $submitBtn.on('click', function(){
        var validUrl = $input.val().match(/^https:\/\/(?:www\.)?youtube.com\/watch\?(?=.*v=\w+)(?:\S+)?$/);
        
        if(validUrl){
            var video_id          = $input.val().split('v=')[1],
                ampersandPosition = video_id.indexOf('&');
            
            if(ampersandPosition != -1) {
              video_id = video_id.substring(0, ampersandPosition);
            }

            getSoundInfo(video_id);
            $addSoundModal.modal('hide');
            $input.parent().removeClass('has-error');
            
        } else {
            $input.parent().addClass('has-error')
                  .end().attr('placeholder', 'Url invalide !');            
        }
    });
}
function getSoundInfo(video_id){
    var soundInfo = [];
    $.getJSON('http://gdata.youtube.com/feeds/api/videos/'+video_id+'?v=2&alt=jsonc',function(data){
        console.log(data.data);
        soundInfo.push({
            'title'  : data.data.title,
            'date'   : data.data.uploaded,
            'viewed' : data.data.viewCount,
            'id'     : data.data.id
        });
        saveSound(soundInfo);
    });
}

function saveSound(array){
    var $tmpSound = $('<div class="sound col-md-3 col-sm-6">\
                        <iframe src="http://www.youtube.com/embed/'+ array[0].id +'"></iframe>\
                       </div>'); 
    $tmpSound.appendTo($('.soundlist'));
}

$(document).ready(function(){
    addSound();
});