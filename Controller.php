<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function home(){


      \SMSGlobal\Credentials::set('6a66c475ad870f64661f2c79f26d4da4', '4f5ca9867afc196238746725c9a33234');
      $keys = \SMSGlobal\Credentials::get();
      $apiKey = $keys->getApiKey();

      $getBalance = new \SMSGlobal\Resource\User();
      $balance =  $getBalance->getBalance()['balance'];


      return view('welcome')->with('balance',$balance)->with('apiKey',$apiKey);
    }


    public function sendingMsg(Request $request){
      // dd($request->all());
      $phNo =  ltrim($request->input('phNumInp'), '0');
      $msg = $request->input('textmsgInp');

      \SMSGlobal\Credentials::set('6a66c475ad870f64661f2c79f26d4da4', '4f5ca9867afc196238746725c9a33234');

          $newsms = new \SMSGlobal\Resource\Sms();
           // dd(\SMSGlobal\Credentials::get()->getApiKey());

          try {

              $response = $newsms->sendToOne('61'.$phNo, $msg);
              print_r($response);
          } catch (\Exception $e) {
              echo $e->getMessage();
          }

          return back()->with('msgSent',"Your message was sent successfully to +61 " . $phNo);


    }
}
