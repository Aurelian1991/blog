<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
class User extends Model implements AuthenticatableContract
{
    use Notifiable,Authenticatable;


//    AuthorizableContract

    /**
     * The attributes that are mass assignable.
     *
     *
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password,driver,',
//    ];
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getByDriver($driver,$driver_id){
        return $this->where('driver',$driver)->where('openid',$driver_id)->first();
    }





}
