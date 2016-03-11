
 jQuery( document ).ready(function($) {
        var myVideo=$('.filme')[0];
        
        
      $('.play').on('click',function() {
    if(myVideo.paused){
        myVideo.play();
        $(this).text("Pause");
    }    else{
        myVideo.pause();
        $(this).text("Play");
    }
        });


 var slider=$('.slider');
 
slider.on('change mouseover', function() {
    myVideo.volume=$(this).val();
});





var sources=['video/Caveman.mp4','video/egypt.mp4','video/minions.mp4','video/sample.mp4','video/small.mp4'];
var iterator=0;
$('.change').on('click',function(){
    if(iterator==5)
    iterator=0;
    $('.filme').attr('src', sources[iterator++]);
    $('.play').text("Pause");
    $('.filme').play();
    });

$('#playlist button').on('click',function () {
    var a=this.id;
    $('.filme').attr('src', sources[a-1]);
    $('.play').text("Pause");
    $('.filme').play();
    });
    
    
    (function() {
    "use strict";
 
    var video, $output;
    var scale = 0.25;
 
    var initialize = function() {
        $output = $("#output");
        video = $(".filme").get(0);
        $("#capture").click(captureImage);                
    };
 
    var captureImage = function() {
        var canvas = document.createElement("canvas");
        canvas.width = video.videoWidth * scale;
        canvas.height = video.videoHeight * scale;
        canvas.getContext('2d')
              .drawImage(video, 0, 0, canvas.width, canvas.height);
 
        var img = document.createElement("img");
        img.src = canvas.toDataURL();
        $output.prepend(img);
    };
 
    $(initialize);            
 
}());

});