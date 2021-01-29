base_url = window.location.origin;

$(document).on('scroll', function(){
    
    if($(document).scrollTop() > 20) {        
        $("#back-to-top").show(200);        
    } else {
        $("#back-to-top").hide(200);
    }
})

$("#back-to-top").on('click', function(){
    $(document).scrollTop(0);
})

$("#about-picture").on('mouseover', function() {
    this.src = base_url + '/public/img/picture-2.2.jpg';
});

$("#about-picture").on('mouseout', function() {
    this.src = base_url + '/public/img/picture-2.1.jpg';
});