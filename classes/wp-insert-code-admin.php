<?php

class wpic_admin extends wpic_setting {

    public static function Init() {
        add_action('admin_menu', array(__CLASS__, 'wp_insert_code_register_options_page'));
       
    }
    
    
    
    public static function wp_insert_code_register_options_page() {
        add_options_page('Kau WP Insert Code', 'WP Insert Code', 'manage_options', 'kau-wp-insert-code', array(__CLASS__,'wpic_option_page'));
    }

    public static function wpic_option_page() {
        if (isset($_POST['awesome_text'])) {
        $value = $_POST['awesome_text'];
        update_option('awesome_text', $value);
    }

    $value = get_option('awesome_text', 'hey-ho');
      include_once WPIC_PATH . "/views/wp-insert-code-view.php";
    }  

}
