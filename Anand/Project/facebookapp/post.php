<?php
require_once ('vendor/autoload.php');
$fb = new Facebook\Facebook([

'app_id' => '247169872653933',

'app_secret' => '4f0795b718156df18e9614d8b0021b3e',

'default_graph_version' => 'v2.3',
]);

$pageAccessToken = 'EAADgzLh1bm0BAI71cfWcZCbiswUVjq7K2XuBP5agE11saMt9DKhCrbMnLWRD1r7Krs3GOlhQyUImDBsSO40jVbH53qAsWGaXLiODhxlh8MjOjKnjwAk9czZBl0jbdlRyzpHtcH5ZALtkH8gIMA63BtCahU4qHceal5UzbsBUB6ZAx7mNXYtvs0HINCmY9wrAvBtfBZAM44QZDZD';

$msg =[
'message' => 'happy birthday',
'url' => 'https://cache.lovethispic.com/uploaded_images/338710-Your-Minions-Love-You-Happy-Birthday.jpg',
];

try
{
$response = $fb->post('/me/feed', $msg,$pageAccessToken);
}
catch(Facebook\Exceptions\FacebookResponseException $e)
{
echo 'Graph returned an error: '.$e->getMessage();
exit;
}
catch(Facebook\Exceptions\FacebookSDKException $e)
{
echo 'Facebook SDK returned an Error: '.$e->getMessage();
exit;
}
$graphNode = $response->getGraphNode();

echo 'ID:'.$graphNode['id'];

?>

