<?php
require 'packages/vendor/autoload.php';
use \Mailjet\Resources;
$name=$_POST['name'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$message=$_POST['message'];
$apikey = 'ab1b02f6d32e39d30fab5baa6d1c8b06';
$apisecret = 'b800e8b85e311cf9d0114ce87304a2a4';
$html = '<!doctype html>
<html>
<head>
  <title>Regarding Arena Ameerpet user contact details</title>
 </head>
<body>
   <h3>Contact To:</h3>
   <p>Hello Sir/Madam,please contact to the following user related to Arena Ameerpet</p>
   <p style="font-size:15px;font-weight:bold;font-style:arial;">NAME    : '.$name.'</p>
   <p style="font-size:15px;font-weight:bold;font-style:arial;">SUBJECT  : '.$subject.'</p>
   <p style="font-size:15px;font-weight:bold;font-style:arial;">EMAIL   : '.$email.'</p>
   <p style="font-size:15px;font-weight:bold;font-style:arial;">MESSAGE : '.$message.'</p>

  
</body>
</html>';
$mj = new \Mailjet\Client($apikey, $apisecret,true,['version' => 'v3.1']);

$body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "ramshiva891@gmail.com",
                'Name' => "Arena Ameerpet"
            ],
            'To' => [
                [
                    'Email' => "kusumapriya.544@gmail.com",
                    'Name' => "Arena Ameerpet"
                ]
            ],
            
            'Subject' => "Contact User",
            'TextPart' => "This mail contains details regarding Users ",
            'HTMLPart' => $html
        ]
    ]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
$result= $response->getStatus();
echo $result;
?>