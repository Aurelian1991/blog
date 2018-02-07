<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TopicTag extends Model
{
    protected $fillable = ['tag_id', 'topic_id'];
    public $timestamps = false;

    public function addTopicIds($topicId,$tagIds){
        $this->where(['topic_id'=>$topicId])->forceDelete();
        $tag=array_map(function($item)use($topicId){
            return['tag_id'=>$item,'topic_id'=>$topicId];
        },$tagIds);
        $res=$this->insert($tag);
        return $res;
    }
}
