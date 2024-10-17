<?php
if (php_sapi_name() !== 'cli' && !isset($_SERVER['HTTP_REFERER'])) {
    header('HTTP/1.0 403 Forbidden');
    exit('Acceso Denegado');
}

// Código del bot
header('Content-Type: application/json');
$botToken = '7715773312:AAEr9Jg6SRixhNJQhSrSUZP7FSXqCd79uYg';
$chatId = '7725301762';

echo json_encode(['botToken' => $botToken, 'chatId' => $chatId]);
?>
