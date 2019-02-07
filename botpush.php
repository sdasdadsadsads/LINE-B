<?php



require "vendor/autoload.php";

$access_token = 'nMWwWgEMj+C1GkDoyRgCkM8eQxb6OgPK6WBO/1NdO4KBDl1MCHXaIyYz7LzEJRpeNqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHee/yaxF9GVKMyT3H936u8Su6r/BI5UOKmeYjgBsZP9nRAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'bcae6e3b79ff1c246b7f76998eb952d0';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







