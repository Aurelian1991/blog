<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function addTagIds($topicId)
    {
        $this->where(['topic_id',$topicId])->forceDelete();
        $this->create();
    }
    public function list($num=15){
        $blogs = $this
            ->WithoutBlocked()
            ->with('user')
            ->orderBy('is_recommended','desc')
            ->orderBy('id','desc')
            ->paginate($num);
        return $blogs;

    }
    public function scopeWithoutBlocked($query)
    {
        return $query->where('is_blocked', '=', 0);
    }
    public function info($name){
        $blog=$this
            ->WithoutBlocked()
            ->where('slug',$name)
            ->with('user')
            ->firstOrFail();
        return $blog;
    }
    public function getByUid($uid)
    {
        $blog = $this
            ->WithoutBlocked()
            ->where('user_id', (int)$uid)
            ->with('user')
            ->firstOrFail();
        return $blog;
    }
}
