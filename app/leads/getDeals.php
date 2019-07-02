<?php


$link = 'https://' . $deal->subdomain . '.amocrm.ru/api/v2/leads?filter%5Bactive%5D=1&query=TestDeal';


  $curl = curl_init ( ) ;
/* Устанавливаем необходимые опции для сеанса cURL */
curl_setopt ( $curl ,CURLOPT_RETURNTRANSFER, true ) ;
curl_setopt ( $curl ,CURLOPT_USERAGENT, 'amoCRM-API-client/1.0' ) ;
curl_setopt ( $curl ,CURLOPT_URL, $link ) ;
curl_setopt ( $curl ,CURLOPT_HEADER, false ) ;
curl_setopt ( $curl ,CURLOPT_COOKIEFILE, dirname ( __DIR__ ) . '/cookie.txt' ) ; #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt ( $curl ,CURLOPT_COOKIEJAR, dirname ( __DIR__ ) . '/cookie.txt' ) ; #PHP>5.3.6 dirname(__FILE__) -> __DIR__
curl_setopt ( $curl ,CURLOPT_SSL_VERIFYPEER, 0 ) ;
curl_setopt ( $curl ,CURLOPT_SSL_VERIFYHOST, 0 ) ;
 
 
 $outDeals = curl_exec ( $curl ) ; #Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo ( $curl ,CURLINFO_HTTP_CODE) ;
curl_close ( $curl ) ;
/* Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
$code = (int) $code;

 
