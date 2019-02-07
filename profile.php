<?php


$access_token = 'KvvehZAygYa9Nz9fIg8ALGhDVyRenadm1Abie0AicCfXV0LwpOKSL9ei9JKfdZ09NqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHeeKs05bYbwgewoYsfPzb2HJTpXc+d7rYfkNp7o+oC5IdQdB04t89/1O/w1cDnyilFU=';

$userId = 'U844dd7170562abbb4019230e1846a729';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

