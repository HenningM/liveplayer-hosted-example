<?php 
  require '../vendor/autoload.php';
  use Firebase\JWT\JWT;

  $claims = [
    'iat' => time(),
    'jti' => uniqid(),
    'cid' => '', // our customer ID
    'mid' => '', // match ID
    'ip'  => '' // end-user IP
  ];

  $lcoApiKey = ''; // our lco API key
  
  $token = JWT::encode($claims, $lcoApiKey);
  $cid = $claims["cid"];
  $mid = $claims["mid"];
  $data = array('cid'=>$cid, 'token'=>$token, 'mid'=>$mid);
  $queryString = http_build_query($data);

  print_r($queryString);
?>
