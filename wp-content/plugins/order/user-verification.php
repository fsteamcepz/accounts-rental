<?php
/**
 * Plugin Name: User-verification
 **/

// Хук для перевірки входу користувача при додаванні товару в кошик
add_action( 'woocommerce_add_to_cart', 'custom_check_login_before_add_to_cart');

function custom_check_login_before_add_to_cart()
{
    if ( !is_user_logged_in() )                                // перевірка: чи користувач увійшов в систему
    {
        wp_redirect( wc_get_page_permalink( 'myaccount' ) );   // Редирект на сторінку "Мій акаунт"
        exit;
    }
}
?>