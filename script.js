function slideshow(target){
    setTimeout(function(){
    var slide = $(target).children().last();
    $(slide).fadeOut(1000,function(){
    $(target).prepend(slide);
    $(slide).show();
    slideshow(target);
    });
    },2000);
    }
    slideshow('#slide');