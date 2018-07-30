<?php



require "vendor/autoload.php";

$access_token = 'A0sMe4LtlYhOSY8f3hDTsuR8kRJ+vypeDOcIDWIab9Wh2zlB8WdHjH0ON7yLrEWQ60pN2QTN/dh35awNP9p1mCiWezqUQ4lAA8maOCtg1l2Jv9UjmX64649WHzVEUEqIPY0sL9A5EkxDy7RdmJ5w6gdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd2b6f859c3b0833ab4d0d123acec33af';

$pushID = 'Ua2e9fc14ce9890b71d309631f0b8fe18';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







