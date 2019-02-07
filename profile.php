<?php


$access_token = 'aX1wDOu8NyF7f8EsE5KMki1SUSMlhk30vwsz8oeZSyYb2q/9iq4KLbhisfom0rMLNqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHefJXoRDrooCx2yFvORP+ZthFCZ2LlHQqhaf4l4J56ffhQdB04t89/1O/w1cDnyilFU=';

$userId = 'U8d87a412bc432d5eedba4a504160a1b8';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

