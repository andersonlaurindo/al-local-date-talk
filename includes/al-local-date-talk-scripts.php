<?php

add_action('wp_enqueue_scripts', 'al_local_date_sponsors_talks_adding_scripts');

function al_local_date_sponsors_talks_adding_scripts(){
    wp_enqueue_script(
        'jquery_countdown',
        plugins_url() . '/al-local-date-talk/js/jquery.countdown.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'al_local_date_sponsors_talks_countdown',
        plugins_url() . '/al-local-date-talk/js/al-local-date-talk-countdown.js',
        null,
        null,
        true
    );

    wp_enqueue_style(
        'al-local-date-talk-style',
        plugins_url() . '/al-local-date-talk/css/al-local-date-talk-style.css'
    );

    $date = get_option('al_local_date_talk_date');
    wp_localize_script(
        'al_local_date_sponsors_talks_countdown',
        'date',
        $date
    );
}