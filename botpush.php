<?php



require "vendor/autoload.php";

$access_token = 'aX1wDOu8NyF7f8EsE5KMki1SUSMlhk30vwsz8oeZSyYb2q/9iq4KLbhisfom0rMLNqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHefJXoRDrooCx2yFvORP+ZthFCZ2LlHQqhaf4l4J56ffhQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bcae6e3b79ff1c246b7f76998eb952d0';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







