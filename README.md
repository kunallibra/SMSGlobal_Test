# SMSGlobal_Test
Test from SMSGlobal
Hello,

The three main files are Controller.php, welcome.blade.php and the web.php (route)

I have uplaoded the ZIP file to download the entire project.


      To set the Key and Secret: 
      \SMSGlobal\Credentials::set('6a66c475ad870f64661f2c79f26d4da4', '4f5ca9867afc196238746725c9a33234');
       
      Getting the info of the KEY:  
      $keys = \SMSGlobal\Credentials::get();
      $apiKey = $keys->getApiKey();
      
      
      To get the balance:
      $getBalance = new \SMSGlobal\Resource\User();
      $balance =  $getBalance->getBalance()['balance'];
      
      
      
      
      #Sending Text Messages
      
      $newsms = new \SMSGlobal\Resource\Sms();
      
      $response = $newsms->sendToOne('61'.$phNo, $msg);
      
      I am concating the 61.$phNo ( where the user submits the phone number) and $msg is the custom message inserted by the user.
      
      If the number and message fields are valid it will first set the API key and Secret. 
      If the keys are valid, call the API post new \SMSGlobal\Resource\Sms();
      
      once it is called, post the input : $response = $newsms->sendToOne('61'.$phNo, $msg);
      
      The message will be sent to the destination Mobile number.
      
      
      
      
      
      
