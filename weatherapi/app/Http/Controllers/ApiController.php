<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Observationslip;

class ApiController extends Controller
{
    
 public function mytoken(){

   $user = User::where("email",Auth::user()->email)->first();
    //$user = User::where("email", $user0->email)->first();
    // return $user->createToken('Todo App')->accessToken ;
    return  User::userToken(Auth::user()->email);
 }  	

  
    
    private function prepareResult($status, $data, $errors,$msg)
  
    {
  
        return ['status' => $status,'data'=> $data,'message' => $msg,'errors' => $errors];
  
    }
  
  

  
   
    public function specificyDate(Request $request)
    {
        if(!$request)
        return '{"message": "specify key"}'; 

        $validuser=User::verifyAPIUser($request->key);
   //return($validuser);
        if($validuser){
            $obv=Observationslip::observationsForspecificDate($request->date);
            return $this->prepareResult(true, $obv, [],"observation data for ".$request->date);
        }else{
            return '{"message": "Unauthenticated"}';
            
        }
      
    }
    public function specificyDateRange(Request $request)
    {
        if(!$request)
        return '{"message": "specify key"}'; 

        $validuser=User::verifyAPIUser($request->key);
   //return($validuser);
        if($validuser){
            $obv=Observationslip::observationsForspecificDateRange($request->datefrom,$request->dateto);
            return $this->prepareResult(true, $obv, [],"observation data for ".$request->date);
        }else{
            return '{"message": "Unauthenticated"}';
            
        }
      
    }
    public function awsCurrentObservations(Request $request)
    {
        if(!$request)
        return '{"message": "specify key"}'; 

        $validuser=User::verifyAPIUser($request->key);

        if($validuser){

        $obv=Observationslip::observations_current_aws();
        return $this->prepareResult(true, $obv, [],"AWS observation data for now date");

        }else{
            return '{"message": "Unauthenticated"}';   
        }
    }
    public function manualCurrentObservations(Request $request)
    {
        if(!$request)
        return '{"message": "specify key"}'; 

        $validuser=User::verifyAPIUser($request->key);

        if($validuser){

        $obv=Observationslip::observations_current_manual();
        return $this->prepareResult(true, $obv, [],"manual observation data for now date");
        }else{
            return '{"message": "Unauthenticated"}';   
        }
    }
    public function awsSpecificDateTimeStationObservations(Request $request)
    {
        if(!$request)
        return '{"message": "specify key"}'; 

        $validuser=User::verifyAPIUser($request->key);

        if($validuser){
        $obv=Observationslip::observations_specific_aws($request->date, $request->time, $request->station);
        return $this->prepareResult(true, $obv, [],"AWS observation data for a specific time and station");
        }else{
            return '{"message": "Unauthenticated"}';   
        }
    }
    public function manualSpecificDateTimeStationObservations(Request $request)
    {
        if(!$request)
        return '{"message": "specify key"}'; 

        $validuser=User::verifyAPIUser($request->key);

        if($validuser){
        $obv=Observationslip::observations_specific_manual($request->date, $request->time, $request->station);
        return $this->prepareResult(true, $obv, [],"AWS observation data for a specific time and station");
        }else{
            return '{"message": "Unauthenticated"}';   
        }
    }
   
    
    
  
 


}
