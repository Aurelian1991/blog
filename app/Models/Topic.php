<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function getTopics(){
        $num=20;
        $topics = $this
            ->WithoutBlocked()
            ->Withoutdraft()
            ->with('user','category')
            ->orderBy('id','desc')
            ->paginate($num);
        return $topics;

    }
    public function scopeWithoutBlocked($query){
        return $query->where('is_blocked','=',0);
    }
    public function scopeWithoutdraft($query){
        return $query->where('is_draft','=',0);
    }


}
