<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'title' => 'required|string|max:100',
            'detail' => 'nullable|string|max:1000',
            'date_start' => 'required|date',
            'date_end' => 'nullable|date',
            'qr_url' => 'nullable|string',
            'cover_url' => 'nullable|string',
            'address' => 'nullable|string|max:200',
            'creator_id' => 'nullable|exists:users,id',
            'photographer_id' => 'nullable|exists:users,id',
        ];
    }
}
