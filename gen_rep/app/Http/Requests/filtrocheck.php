<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class filtrocheck extends FormRequest
{

    public function autorizar()
    {
        return true;
    }


    public function rules()
    {
        return [
            'skills.*' => 'in:php,mysql,javascript,laravel'
        ];
    }
    public function setSkillsAttribute($value)
    {
     $this->attributes['skills'] = implode(', ', $value);
    }
}