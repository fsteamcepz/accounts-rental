<?php

/**
 * Plugin Name: Telegram-notification
 **/

// функція відправляє повідомлення про нове замовлення (якщо 1 - пріоритет виклику функції, тобто одразу після натискання кнопки "підтвердити замовлення")
add_action('woocommerce_thankyou', 'send_telegram_notification_on_new_order');

function send_telegram_notification_on_new_order($order_id)
{
    // Створюємо об'єкт замовлення. Клас WC_Order містить методи для доступу до даних замовлення
    $order = new WC_Order($order_id);

    // Отримуємо список товарів у замовленні (змінна $product_names створюється як порожній масив)
    $product_names = array();

    foreach($order->get_items() as $order_id => $item)
    {
        $product_name = $item->get_name();      // назва товару
        $product_qty = $item->get_quantity();   // кількість
        $product_names[] = $product_name.' — '.$product_qty.' шт';
    }

    // Формуємо текст повідомлення
    $message = '• Нове замовлення: №'.$order->get_order_number()."\n";
    $message .= '• Клієнт: '.$order->get_billing_first_name().' '.$order->get_billing_last_name()."\n";
    $message .= '• Телефон: '.$order->get_billing_phone()."\n";
    $message .= '• Email: '.$order->get_billing_email()."\n";
    $message .= '• Акаунти:'."\n✔️".implode("\n✔️", $product_names)."\n";
    $message .= '• Ціна: '.$order->get_total().' '.'грн.'."\n";
   

    // URL-адреса телеграм-бота для надсилання інформації про нове замовлення
    $url = 'https://api.telegram.org/botLINK/sendMessage';

    // Створимо масив з ключами для надсилання повідомлення
    $data = array(
        'chat_id' => '200920246',         // id користувача в телеграмі
        'text' => $message,               // інформація про замовлення
    );

    // Створимо масив з налаштуваннями для виклику API Телеграма
    $calling = array(
        'http' => array(
            // задано формат для виклику API Телеграма
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            // "POST" передає дані у тілі запиту у форматі "header"
            'method'  => 'POST',
            // Функція "http_build_query" використовується для правильного кодування даних з масиву $data
            'content' => http_build_query($data),
        ),
    );


    // Виконуємо звернення до API Телеграма
    $context = stream_context_create($calling);

    // Відправляємо повідомлення в телеграм-бот
    // Параметр "true" вказує функції повертати вміст відповіді у вигляді рядка
    file_get_contents($url, true, $context);
}
?>