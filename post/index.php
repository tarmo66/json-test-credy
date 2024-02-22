<?php
$time = time();
$signature = sha1($time . 'credy');

$json = '{
"data":[
  {"first_name":"Tarmo", "last_name":"Allikvee", "email":"tarmo@traktorist.org", "bio":"A PHP developer with e-commerce experience is looking web development projects that bring business results to the customer.", "technologies":"JSON, Git, JavaScript, PHP, MySQL, SOAP API, REST API, XML, CSS Adobe Photoshop, Adobe Illustrator, Adobe Flash, Adobe After Effects, Bootstrap, Wordpress, Woocommerce, Codeigniter, Visual Basic, C-Panel", "timestamp":"' . $time . '", "signature":"' . $signature . '", "vcs_uri":"https://github.com/tarmo66"}
]
}';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.traktorist.org/traffic/read.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$json,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
