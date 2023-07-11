<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string',
            'image' => 'required|image',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'venue' => 'required|string',
            'status' => 'boolean',
        ];
    }
}

