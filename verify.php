<?php
$access_token = 'A0sMe4LtlYhOSY8f3hDTsuR8kRJ+vypeDOcIDWIab9Wh2zlB8WdHjH0ON7yLrEWQ60pN2QTN/dh35awNP9p1mCiWezqUQ4lAA8maOCtg1l2Jv9UjmX64649WHzVEUEqIPY0sL9A5EkxDy7RdmJ5w6gdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
