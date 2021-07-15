<?php

add_action('admin_menu', 'al_local_date_talk_menu');

function al_local_date_talk_menu(){
    add_menu_page(
        'Talk Local',
        'Talk Local',
        'manage_options',
        'local-talk',
        'al_local_date_talk_menu_page',        
        'dashicons-location-alt',
        -1
    );
}

function al_local_date_talk_menu_page(){
    ?>
    <h1>Talk local</h1>
    <form action="options.php" method="post">
    <?php
        settings_errors();
        do_settings_sections('local-talk');
        settings_fields('al_local_date_talk_settings');
        submit_button();
    ?>
    </form>

    <?php
}

add_action('admin_menu','al_local_date_talk_section');

function al_local_date_talk_section(){
    add_settings_section(
        'al_local_date_talk_section',
        'Talk local settings',
        'al_local_date_talk_field_section_details',
        'local-talk',

    );

    add_settings_field(
        'al_local_date_talk_address',
        'Address',
        'al_local_date_talk_address',
        'local-talk',
        'al_local_date_talk_section'
    );

    register_setting(
        'al_local_date_talk_settings',
        'al_local_date_talk_address',
        'validate_address'
    );

    add_settings_field(
        'al_local_date_talk_city',
        'City',
        'al_local_date_talk_city',
        'local-talk',
        'al_local_date_talk_section'
    );

    register_setting(
        'al_local_date_talk_settings',
        'al_local_date_talk_city',
        'validate_city'
    );

    add_settings_field(
        'al_local_date_talk_date',
        'Date',
        'al_local_date_talk_date',
        'local-talk',
        'al_local_date_talk_section'
    );

    register_setting(
        'al_local_date_talk_settings',
        'al_local_date_talk_date',
        'validate_date'
    );
}

function al_local_date_talk_field_section_details(){
    ?>
    <p>You should insert address, city and date about next talk</p>
    <?php
}

function al_local_date_talk_address(){
    ?>
    <input type="text"
           name="al_local_date_talk_address"
           id="al_local_date_talk_address"
           value="<?= esc_attr(get_option('al_local_date_talk_address')) ?>"
           required>
    <?php
}

function al_local_date_talk_city(){
    ?>
        <input type="text"
           name="al_local_date_talk_city"
           id="al_local_date_talk_city"
           value="<?= esc_attr(get_option('al_local_date_talk_city')) ?>"
           required>
    <?php
}

function al_local_date_talk_date(){
    ?>
        <input type="date"
           name="al_local_date_talk_date"
           id="al_local_date_talk_date"
           value="<?= esc_attr(get_option('al_local_date_talk_date')) ?>"
           required>
    <?php
}

function validate_address($address){
    if(empty($address)){
        $address = get_option('al_local_date_talk_address');
        add_settings_error(
            'al_local_date_talk_error_message',
            'al_local_date_talk_error_address',
            'You should fill the address',
            'error'
        );
    }
    return $address;
}

function validate_city($city){
    if(empty($city)){
        $city = get_option('al_local_date_talk_city');
        add_settings_error(
            'al_local_date_talk_error_message',
            'al_local_date_talk_error_city',
            'You should fill the city',
            'error'
        );
    }
    return $city;
}

function validate_date($date){
    if(empty($date)){
        $date = get_option('al_local_date_talk_date');
        add_settings_error(
            'al_local_date_talk_error_message',
            'al_local_date_talk_error_date',
            'You should fill the date',
            'error'
        );
    }
    return $date;
}