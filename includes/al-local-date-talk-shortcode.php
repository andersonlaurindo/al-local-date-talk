<?php

add_shortcode('al_local_date_talk', 'al_local_date_talk_generated_code');

function al_local_date_talk_generated_code(){
    $address = urlencode(get_option('al_local_date_talk_address'));
    $city = urlencode(get_option('al_local_date_talk_city'));
    $date = get_option('al_local_date_talk_date');
    return '<div class="mapouter">
                <div class="gmap_canvas">
                    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=' . esc_attr($address) . esc_attr($city) . '&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    </iframe>
                </div>
            </div>
            <h2 class="next-event">Next Event</h2>
            <div id="event">
                <div id="days"></div>
                <div id="hours"></div>
                <div id="minutes"></div>
                <div id="seconds"></div>
            </div>';
}