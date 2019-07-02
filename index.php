 <!DOCTYPE html>
 <?php require_once('bootstrap.php'); ?>
 <?php require_once('core/mainScript.php'); ?>
<html>
<head>
    <meta charset="utf-8">
    <link href="../web/css/main.css" rel="stylesheet">
    <link href="../web/css/shrift.css" rel="stylesheet">
	<title>Scipitrs</title>
</head>
<body>
    
    
   <div class="form">
        <form action="#" method="POST" class="send_form">
            
   
            <input class="input" type="text" name="FIO" placeholder="ФИО"  ><br/>
  
            <input  class="input" type="text" name="Mobile_Fone" placeholder="Телефон"><br/>
 
            <input  class="input" type="text" name="Email" placeholder="Email"><br/>
             <input  class="input" type="text" name="deal_name" placeholder="Название сделки"><br/>
             <input  class="input" type="text" name="budget" placeholder="Бюджет сделки"><br/>
              
              <div class="stabilize_1"> прикрепить сделку <input class="input_checkbox" type="checkbox" name="tie_leads"> </div>

            <input  class="input" type="submit" name="submit" value="Создать">       
        </form>
    </div>
  
</body>
</html>


 