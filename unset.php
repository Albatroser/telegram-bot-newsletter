<?php
/**
 * README
 * This file is intended to unset the webhook.
 * Uncommented parameters must be filled
 */

// Load composer
require_once __DIR__ . '/vendor/autoload.php';


if(!file_exists('config.php')) {
    die("Please rename example_config.php to config.php and try again. \n");
} else {
    require_once __DIR__.'/config.php';
}


try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram(BOT_API_KEY, BOT_USERNAME);

    // Delete webhook
    $result = $telegram->deleteWebhook();

    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}
