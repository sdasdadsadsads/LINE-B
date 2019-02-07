<?php


$access_token = 'nMWwWgEMj+C1GkDoyRgCkM8eQxb6OgPK6WBO/1NdO4KBDl1MCHXaIyYz7LzEJRpeNqcUjZYVupEoYGB44w/2PcOeQpfhGIJ1Pc91nkTKHee/yaxF9GVKMyT3H936u8Su6r/BI5UOKmeYjgBsZP9nRAdB04t89/1O/w1cDnyilFU=
';

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

