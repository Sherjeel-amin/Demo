<?php
// $curl = curl_init();  // to initialize the cURL function //

// curl_setopt($curl, CURLOPT_URL, 'http://www.google.com');
// curl_exec($curl);

// curl_close($curl);



//curl_init();
//curl_setopt();
//curl_exec();
//curl_close();

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://localhost/cURL.php");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$arr=array('name'=>'sherjeel');
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
$result=curl_exec($ch);
print_r($result);
curl_close($ch);

/*$url="https://i.pinimg.com/originals/fd/d0/56/fdd056cabe7b66c234e26480b0e791fc.jpg";
$image="image.jpg";

$fimage=fopen($image,'w+');
$ch=curl_init($url);
curl_setopt($ch,CURLOPT_FILE,$fimage);
curl_setopt($ch,CURLOPT_TIMEOUT,1000);
curl_exec($ch);
curl_close($ch);
fclose($fimage);*/


?>
