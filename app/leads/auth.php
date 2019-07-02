<?php


 
$curl = curl_init ( ) ;  
curl_setopt ( $curl ,CURLOPT_RETURNTRANSFER, true ) ;
curl_setopt ( $curl ,CURLOPT_USERAGENT, 'amoCRM-API-client/1.0' ) ;
curl_setopt ( $curl ,CURLOPT_URL, $deal->authLink ) ;
curl_setopt ( $curl ,CURLOPT_CUSTOMREQUEST, 'POST' ) ;
curl_setopt ( $curl ,CURLOPT_POSTFIELDS, json_encode ( $deal->user ) ) ;
curl_setopt ( $curl ,CURLOPT_HTTPHEADER, array ( 'Content-Type: application/json' ) ) ;
curl_setopt ( $curl ,CURLOPT_HEADER, false ) ;
curl_setopt ( $curl ,CURLOPT_COOKIEFILE, dirname ( __DIR__ ) . '/cookie.txt' ) ;  
curl_setopt ( $curl ,CURLOPT_COOKIEJAR, dirname ( __DIR__ ) . '/cookie.txt' ) ; 
curl_setopt ( $curl ,CURLOPT_SSL_VERIFYPEER, 0 ) ;
curl_setopt ( $curl ,CURLOPT_SSL_VERIFYHOST, 0 ) ;

$out = curl_exec ( $curl ) ; #Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo ( $curl ,CURLINFO_HTTP_CODE) ; #Получим HTTP-код ответа сервера
curl_close ( $curl ) ; #Завершаем сеанс cURL
$code =(int)$code;

 