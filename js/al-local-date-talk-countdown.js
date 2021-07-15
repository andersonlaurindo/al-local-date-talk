jQuery(document).ready(function($){
    $('#event').countdown(date, function(event){
        $("#days").html(event.strftime('%D Days'));
        $("#hours").html(event.strftime('%H Hours'));
        $("#minutes").html(event.strftime('%M Minutes'));
        $("#seconds").html(event.strftime('%S Seconds'));
    });
})