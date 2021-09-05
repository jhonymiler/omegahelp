<?php
require_once __DIR__ . '/vendor/autoload.php';


$loop   = React\EventLoop\Factory::create();
$App = new App\Chat;


$webSock = new React\Socket\Server('192.185.212.121:3000', $loop);
$webServer = new Ratchet\Server\IoServer(
    new Ratchet\Http\HttpServer(
        new Ratchet\WebSocket\WsServer(
            new Ratchet\Wamp\WampServer(
                $App
            )
        )
    ),
    $webSock
);

$loop->run();
