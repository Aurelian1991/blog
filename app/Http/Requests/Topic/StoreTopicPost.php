<?php

namespace App\Http\Requests\Topic;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Topic;

class StoreTopicPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!empty($this->input('id'))){
            $topic_id= $this->input('id');
            $topic=Topic::find($topic_id);
            return $topic && $this->user()->can('update', $topic);

        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'title' => 'required|max:255',
             'content' => 'required',
             'tags' => 'array',
            'tags.*' => 'distinct'
            
        ];
    }
}
