<?php
$access_token = 'nMWwWgEMj+C1GkDoyRgCkM8eQxb6OgPK6WBO/1NdO4KBDl1MCHXaIyYz7LzEJRpeNqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHee/yaxF9GVKMyT3H936u8Su6r/BI5UOKmeYjgBsZP9nRAdB04t89/1O/w1cDnyilFU=';
$channel ='bcae6e3b79ff1c246b7f76998eb952d0';

$url = 'https://api.line.me/v2/bot/user/U844dd7170562abbb4019230e1846a729/'."$access_token".'';

$headers = array('Authorization: Bearer ' .$channel. $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

print_r($result);
