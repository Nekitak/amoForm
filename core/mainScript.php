<?php

 
/*include Deals class and run auth script*/
require_once('Deals.php');
$deal = new Deals();
require_once(ROOT . '/app/leads/auth.php'); 
 
const MONTH = (60*60*24*7*12);
/* get current month*/
$time = (int)(time()/MONTH);
    
 
 
 
 
 
#if need get deal list , use it:  
  
    require_once(ROOT . '/app/leads/getDeals.php');
        $Response = json_decode ( $outDeals , true ) ;
        $Response = $Response['_embedded' ][ 'items' ];
        
      
   

#if need add new contact , deal and bind them , use it:
        
 /*  
  if(!empty($_POST['submit'])){ 
     $leads ['add'] = $deal->newDeal();
 
  require_once('leads/newDeal.php');
     require_once('leads/getDeals.php');
        $Response = json_decode ( $outDeals , true ) ;
        $Response = $Response['_embedded' ][ 'items' ];
        $lastDeal = end($Response);

  $contacts [ 'add' ] = $deal->newContact($lastDeal['id']);
    require_once('leads/newContact.php'); 
    
} 
  */  
 
 
 
 
 
 

 
 


 
  
         
