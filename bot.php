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
        $str = "การบ้าน: คอมบัสโปรเจคกลุ่มเขียนแบบ IQMหารหัสประเทศฯลฯ+เอาเลขที่อาจารย์ให้ตอนเลิกคลาสมาหาว่าทำยังไงถึงจะไม่เกิน100% Compilerทำแบบฝึกหัด2อัน Securityยังไม่มีนะ AIอ่านทวนวันศุกร์จะมีควิซ และก็โปรเจคจบจ้าา";
        $array = explode(" ",$str);
        $arrlength = count($array);
        for($x = 0; $x<$arrlength; $x++){
            $arrayPostData['messages'][0]['text'] = $arrayPostData['messages'][0]['text']."\n".$array[$x] ;
        }
         replyMsg($arrayHeader,$arrayPostData);
      } 
    else if($arrayJson['events'][0]['message']['text'] == "Combus" || $arrayJson['events'][0]['message']['text'] ==  "combus" || $arrayJson['events'][0]['message']['text'] ==  "คอมบัส"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "คอมบัส โปรเจคกลุ่มเขียนแบบ";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "IQM" || $arrayJson['events'][0]['message']['text'] ==  "iqm"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "IQM หารหัสประเทศฯลฯ + เอาเลขที่อาจารย์ให้ตอนเลิกคลาสมาหาว่าทำยังไงถึงจะไม่เกิน100%";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "Compiler" || $arrayJson['events'][0]['message']['text'] ==  "compiler" || $arrayJson['events'][0]['message']['text'] ==  "คอมไพ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "Compiler ทำแบบฝึกหัด2อัน";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "Secure" || $arrayJson['events'][0]['message']['text'] ==  "secure" || $arrayJson['events'][0]['message']['text'] ==  "Security" || $arrayJson['events'][0]['message']['text'] ==  "security" || $arrayJson['events'][0]['message']['text'] ==  "ซีเคียว"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "Security ยังไม่มีนะ";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "AI" || $arrayJson['events'][0]['message']['text'] ==  "ai" || $arrayJson['events'][0]['message']['text'] ==  "เอไอ"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "AI คือสิ่งที่มนุษย์สร้างขึ้นโดยมีพฤติกรรมเลียนแบบธรรมชาติ ในการสร้างAIต้องมีความรู้ทางด้านวิศวกรรมและวิทยาศาสตร์";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "บอท" && $arrayJson['events'][0]['source']['userId']=="Ue14f54b7c3fe3f2219a3f42c016ab3a7"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ครับ";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "ด่าแจม" && $arrayJson['events'][0]['source']['userId']=="Ue14f54b7c3fe3f2219a3f42c016ab3a7"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "แจมกาก กากแจม";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "1";
        $arrayPostData['messages'][1]['stickerId'] = "122";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if($arrayJson['events'][0]['message']['text'] == "ด่าแพท" && $arrayJson['events'][0]['source']['userId']=="Ue14f54b7c3fe3f2219a3f42c016ab3a7"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "ข้าวปลาไม่รู้จักกิน กินขี้ไหม";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "1";
        $arrayPostData['messages'][1]['stickerId'] = "133";
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if(strstr($message,"โง่")){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $a=array("ด่าผมโง่ ต่อยกับกูไหม","ด่าใคร","จะวัดป่ะล่ะ","1-1มา","เก็บปากคุณไว้กินข้าวเถอะ");
        $random_keys=array_rand($a);
        $arrayPostData['messages'][0]['text'] = $a[$random_keys];
        replyMsg($arrayHeader,$arrayPostData);
    }
    else if(strstr($message,"!potato") || strstr($message,"!Potato") || strstr($message,"!โปเตโต้")){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $a=array("https://www.youtube.com/watch?v=UHKS37Inpdc&list=PLxLHpLGKZig0G9NvkGYZu4JhcHDyke-Og?autoplay=1","https://www.youtube.com/watch?v=re1hIVppuc0?autoplay=1","https://www.youtube.com/watch?v=1WMwDuwwAcM?autoplay=1","https://www.youtube.com/watch?v=zYNsQ6ibdZs&start_radio=1&list=RDEMmLFELjkoyxs1joagnYi7Lg?autoplay=1","https://www.youtube.com/watch?v=zYNsQ6ibdZs&start_radio=1&list=RDEMmLFELjkoyxs1joagnYi7Lg?autoplay=1");
        $random_keys=array_rand($a);
        $arrayPostData['messages'][0]['text'] = $a[$random_keys];
        replyMsg($arrayHeader,$arrayPostData);
    }
//     else if(strstr($message,"!พี่ตูน") || strstr($message,"!Bodyslam") || strstr($message,"!bodyslam")){
//         $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        
//         replyMsg($arrayHeader,$arrayPostData);
//     }
    else if($arrayJson['events'][0]['message']['text'] == "วันนี้วันอะไร" || $arrayJson['events'][0]['message']['text'] == "วันอะไร" || $arrayJson['events'][0]['message']['text'] == "วัน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = date("l")."ครับ";
        replyMsg($arrayHeader,$arrayPostData);
     }
// function generateRandomString($length = 10) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     return $randomString;
// }
// echo generateRandomString();

//     else if($arrayJson['events'][0]['source']['userId'] == "Uecdf73f5f77c4322a6aec9e8bb599955"){
//         $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
//         $arrayPostData['messages'][0]['type'] = "text";
//         $arrayPostData['messages'][0]['text'] = "เจ้านายไม่อยู่ เชิญไปคุยกับขี้ก่อนนะครับ";
//         replyMsg($arrayHeader,$arrayPostData);
        //         $arrayJson['events'][0]['source']['userId']; ใช้ในการระบุไอดีของผู้ใช้ที่ตอบกลับมา
//      }
    
//       else if($arrayJson['events'][0]['source']['userId'] == "Ud1794d48c4e3dd1f68cf78f76447f305"){
          
//       }
        else if($arrayJson['events'][0]['message']['text'] == "hint" || $arrayJson['events'][0]['message']['text'] == "Hint" || $arrayJson['events'][0]['message']['text'] == "ช่วยเหลือ"){
            $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
            $arrayPostData['messages'][0]['type'] = "text";
            $str = "บอท การบ้าน ด่าแพท ด่าแจม !p potato !p Potato !p โปเตโต้  ประโยคที่มีคำว่าโง่ ชื่อวิชาที่เรียน";
            $array = explode(" ",$str);
            $arrlength = count($array);
            for($x = 0; $x<$arrlength; $x++){
                $arrayPostData['messages'][0]['text'] = $arrayPostData['messages'][0]['text']."\n".$array[$x] ;
            }
            replyMsg($arrayHeader,$arrayPostData);
        }
            
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
