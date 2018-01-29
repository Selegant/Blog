<html>
 <head>
  <title>PHP«Î«Û∞Ÿ∂»</title>
 </head>
 <body>
 <?php 
$urls = array(
    'http://www.selegant.xin/2017/11/10/%E8%AE%B0%E5%BD%95%E6%97%A5%E5%BF%97/',
    'http://www.selegant.xin/2017/10/31/one/',
);
$api = 'http://data.zz.baidu.com/urls?site=www.selegant.xin&token=nJsGNjZn0ZEUQqB3';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result; 
?>
 </body>
</html>