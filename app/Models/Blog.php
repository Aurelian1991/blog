<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function addTagIds($topicId)
    {
        $this->where(['topic_id',$topicId])->forceDelete();
        $this->create();
    }
}
