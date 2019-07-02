<?php

 
 

/*include Deals class and run auth script*/
require_once(ROOT . '/core/Deals.php');
$deal = new Deals();
require_once(ROOT . '/app/leads/auth.php'); 
 
 $deal->checkAuth($out);
    
      
  
 
 
  if(!empty($_POST['submit'])){ 
    $requestParam = $_POST['deal_name']; // get deal_name from form
    
        //get leads with param = deal_name
        require_once(ROOT . '/app/leads/getDeals.php');
        $ResponseDeal = json_decode ( $outDeals , true ) ;
        $ResponseDeal = $ResponseDeal['_embedded' ][ 'items' ];
        
       
        // create new deal if deal does not exist and get this deal , else create task with message 'связатся  с клиентом'
        if($ResponseDeal == null){
             $leads ['add'] = $deal->newDeal();
             require_once(ROOT . '/app/leads/newDeal.php');
              require_once(ROOT . '/app/leads/getDeals.php');
                $ResponseDeal = json_decode ( $outDeals , true ) ;
                $ResponseDeal = $ResponseDeal['_embedded' ][ 'items' ];
        }else{
            $id = $ResponseDeal[0]['id'];  
            $tasks['add'] = $deal->addTask($id);
            require_once(ROOT . '/app/leads/addTask.php');
        }
        
    //tie deal and contact if checkbox active
    $_POST['input_checkbox'] ? $id =  $ResponseDeal[0]['id'] : null; 
    
    //create new account and applay params
    $contacts ['add'] = $deal->newContact($id);
    require_once(ROOT . '/app/leads/newContact.php'); 
    
 
} 
    
 
 
 
 
 
 

 
 


 
  
         
