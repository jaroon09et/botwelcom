$API_URL = 'https://api.line.me/v2/bot/message/push';

$ACCESS_TOKEN = '4bdbc911-1f20-4937-9f92-1c5f05dbf8b1';

$CHANNEL_SECRET = '45fc9e7d89c28dcc9cd54df4d04dcdb0';

$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$request = file_get_contents('php://input');
function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
if ( sizeof($request_array['events']) > 0 ) {
      foreach ($request_array['events'] as $event) {
      
      $reply_message = '';
      $reply_token = $event['replyToken'];
      $data = [
         'replyToken' => $reply_token,
         'messages' => [
            ['type' => 'text', 
             'text' => json_encode($request_array)]
         ]
      ];
      $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
      $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);
      echo "Result: ".$send_result."\r\n";
   }
}
echo "OK";
$request_array = json_decode($request, true);
if (notifymenbersjoingroup($reqest_pushMessage['events'])>response) {
   memberjoin($reqest_pushMessage['events'])as events) {
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);
$response = $bot->getGroupMemberIds(<groupId>, <continuationToken>);
$response = $bot->memberjoined(<userId>, <continuationToken>);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สวัสดีคุณ{Nickname}ยินดีต้อนรับเข้ากลุ่ม');
$response = $bot->pushMessage('<to>', $textMessageBuilder);

$textwelcomMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextWelcomMessageBuilder('สวัสดีคุณ{Nickname}ยินดีต้อนรับเข้ากลุ่ม');
$response = $bot->pushwelcomMessageMembersJoinGroup('<to>', $textwelcomMessageBuilder);
$reqest_events=pushMessage_ClinentJoin_GroupNotif($reqest, ture);
$NOTIF_GROUP=memberjoined($reqest_response=pushMessage'<to>', $textwelcomMessageBuider)
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

