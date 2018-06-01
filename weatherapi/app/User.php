<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function verifyAPIUser($key){
        //$observations= DB::connection('mysql2')->select("SELECT * FROM observationslip, stations where stations.station_id=observationslip.Station AND stations.StationName='kampala'AND DATE_FORMAT(observationslip.creation_date, '%Y-%m-%d')='$date' ");
        //$Isuserzkeythere= User::where("remember_token='$key');
        $Isuserzkeythere = DB::table('users')->where('remember_token', $key)->get()->count();
            
        if($Isuserzkeythere=='1') return true;

  }

  public static function userToken($email_){
    //$observations= DB::connection('mysql2')->select("SELECT * FROM observationslip, stations where stations.station_id=observationslip.Station AND stations.StationName='kampala'AND DATE_FORMAT(observationslip.creation_date, '%Y-%m-%d')='$date' ");
    //$Isuserzkeythere= User::where("remember_token='$key');
    $Isuserzkey =   DB::connection('mysql')->select("SELECT remember_token FROM users where email='$email_' ");
   
        
    return $Isuserzkey[0]->remember_token; //json_encode($Isuserzkey);

}

  
}
