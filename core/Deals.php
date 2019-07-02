<?php
 
 

/**
 * Description of Print
 * @param $errors - array with list of error
 * @param $user - userData for auth
 * @param $subdomain - subdomain for lead scripts 
 * @param $authLink - link for auth lead script
 * 
 * @author nekitak46
 */
class Deals 
{
    public $errors;
    public $user;
    public $subdomain;
    public $authLink;
    
    public function __construct() 
    {
        $this->errors =  require_once(ROOT . '/app/config/errors.php');
        $this->user = require_once(ROOT . '/app/config/user.php');
        $this->subdomain = require_once(ROOT . '/app/config/subdomain.php');
        $this->authLink =  'https://' . $this->subdomain . '.amocrm.ru/private/api/auth.php?type=json'; 
    }
    
     
    public function checkForErrors($code)
    {
        try
        {
          #if response code is not equal to 200 or 204 - return an error message
        if($code != 200 && $code != 204)
            throw new Exception(isset($this->print1->errors [ $code ]) ? $this->print1->errors[$code] : 'Undescribed error' , $code ) ;
        }
        catch(Exception $E )
        {
          die ( 'Ошибка: ' . $E -> getMessage ( ) .PHP_EOL. 'Код ошибки: ' . $E -> getCode ( ) ) ;
        }
    }
    
    /*debug function for check is auth successful*/
    public function checkAuth($out)
    {
        $Response = json_decode($out,true) ;
  
        if(isset($Response['response' ]['auth'])) {
         echo 'Авторизация прошла успешно' ;
        }else{
        echo 'Авторизация не удалась' ;
        }
    }
     
    /*debug function for print params of responce amoCRM*/
    public static function debug($info)
    {
        echo '<pre>'; print_r($info); echo '</pre>';
    }
    
    /*return array with params for create new deal*/
    public static function newDeal()
    {
       if(!empty($_POST))
       {
            return 
               array(
                    array(
                        'name' => $_POST['deal_name'] ,
                        'created_at' => time() ,
                        'status_id' => 7087609 ,
                        'sale' => $_POST['budget'] ,
                        'responsible_user_id' => 215309 ,
                        'custom_fields' => array(
                        array(

                           'id' => 426106 ,

                        )
                    )
                )          
            );  
       } 
       
    }
    
    /*return array with params for create new contact*/
    public static function newContact($id = '0')
    {
        $id = intval($id);
       if(!empty($_POST))
       {
        return 
           array(
                 array (
                        'name' => $_POST['FIO'] ,
                        'created_at' => time(),
                        'created_by' => 504141 ,
                        'responsible_user_id' => 504141 ,
                         'leads_id' => array(
                           $id  
                        ),
                         'custom_fields' => array(
                                                    array(
                                                        'id' => 416853,
                                                        'values' => array(
                                                            array(
                                                                'value' => $_POST['Mobile_Fone'],
                                                                'enum' => "MOB",
                                                            ),
                                                        ),
                                                    ),
                                                    array(
                                                        'id' => 416855,
                                                        'values' => array(
                                                            array(
                                                                'value' => $_POST['Email'],
                                                                'enum' => "WORK",
                                                            ),
                                                        ),
                                                    ),
                                                ),
                        )             
                );  
       }      
    }
    
    public static function addTask($id)
    {
       return array(
                array(
                    'element_id' => $id, #ID сделки
                    'element_type' => 2, #Показываем, что это - сделка, а не контакт
                    'task_type' => 1, #Звонок
                    'text' => 'Связаться с клиентом ',
                    'responsible_user_id' => 109999,
                    'complete_till_at' => 1375285346,
                ),
           );
    }
    
}


 