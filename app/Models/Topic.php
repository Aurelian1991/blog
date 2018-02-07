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
    public function TopicTag()
    {
        return $this->hasMany('App\Models\TopicTag');
    }

    public function getTopics(){
        $num=20;
        $topics = $this
            ->WithoutBlocked()
            ->Withoutdraft()
            ->with('user','category', 'TopicTag')
            ->orderBy('id','desc')
            ->paginate($num);
        return $topics;

    }
    public function getTopicsHot(){
         $num=20;
        $topics = $this
            ->WithoutBlocked()
            ->Withoutdraft()
            ->Excellent()
            ->with('user','category')
            ->orderBy('id','desc')
            ->paginate($num);
    }
    //未被禁用
    public function scopeWithoutBlocked($query){
        return $query->where('is_blocked','=',0);
    }
    //草稿
    public function scopeWithoutdraft($query){
        return $query->where('is_draft','=',0);
    }
    //热门文章
     public function scopeExcellent($query){
        return $query->where('is_excellent','=',1);
    }
    public function detail($id){
        $topics = $this
            ->WithoutBlocked()
            ->Withoutdraft()
            ->with('user', 'category', 'TopicTag')
            ->find($id);
        return $topics;
    }

}
