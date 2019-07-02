<?php

 
/*include Deals class and run auth script*/
require_once(ROOT . '/core/Deals.php');
$deal = new Deals();
require_once(ROOT . '/app/leads/auth.php'); 
 
 $deal->checkAuth($out);
    
 if(require_once(ROOT . '/app/leads/getDeals.php')){
        $Response = json_decode ( $outDeals , true ) ;
        $Response = $Response['_embedded' ][ 'items' ];
        
 }
 
 
 
  if(!empty($_POST['submit'])){ 
    //$leads ['add'] = $deal->newDeal();
 
  //require_once('leads/newDeal.php');
     

  $contacts ['add'] = $deal->newContact();
  require_once(ROOT . '/app/leads/newContact.php'); 
    
} 
    
 
 
 
 
 
 

 
 


 
  
         
