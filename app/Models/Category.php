<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cache;

class Category extends Model
{
    protected $dates = ['deleted_at'];
    //前台首页导航
    public function indexNav($minues=60){
        $data= Cache::remember('indexNav', $minues, function () {
            return $this->where('parent_id',0)
                        ->orderBy('weight','desc')
                        ->orderBy('created_at','asc')
                        ->select('id','name','slug','weight')
                        ->get();
        });
        return $data;
    }
}
