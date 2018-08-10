<?php
    $accessToken = "A0sMe4LtlYhOSY8f3hDTsuR8kRJ+vypeDOcIDWIab9Wh2zlB8WdHjH0ON7yLrEWQ60pN2QTN/dh35awNP9p1mCiWezqUQ4lAA8maOCtg1l2Jv9UjmX64649WHzVEUEqIPY0sL9A5EkxDy7RdmJ5w6gdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";
    
    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
    if($arrayJson['events'][0]['message']['text'] == "การบ้าน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "การบ้าน: คอมบัสโปรเจคกลุ่มเขียนแบบ IQMหารหัสประเทศฯลฯ Compilerทำแบบฝึกหัด Securityยังไม่มีนะ AIอ่านทวนอาทิตย์หน้าจะมีควิซและก็โปรเจคจบจ้าา";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "บอท")&&($arrayJson['events'][0]['source']['userId']=="Ue14f54b7c3fe3f2219a3f42c016ab3a7"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ครับเจ้านาย";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['source']['userId'] == "Uecdf73f5f77c4322a6aec9e8bb599955"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "เงียบก่อน ไอแจมมีไรทักเจ้านายที่แชทแยก";
        replyMsg($arrayHeader,$arrayPostData);
        //         $arrayJson['events'][0]['source']['userId']; ใช้ในการระบุไอดีของผู้ใช้ที่ตอบกลับมา
     }
//      else if($arrayJson['events'][0]['message']['text']
   
function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
   exit;
?>
