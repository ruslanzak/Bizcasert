$(document).ready(function(){
    $("#phone").mask("8(999) 999-9999");
    $('.carousel').carousel();
})

$(document).load(function(){
    $('.elements-gride').masonry({
        itemSelector: '.element-item',
        columnWidth: '.persent-size',
        percentPosition: true
    });
})