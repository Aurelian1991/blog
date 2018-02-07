<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cache;

class Tag extends Model
{
    public function tagsAll(){
        $tags = Cache::remember('tagsAll', 10, function () {
            return self::pluck('name', 'id')->toArray();
        });
        return $tags;
    }
}
