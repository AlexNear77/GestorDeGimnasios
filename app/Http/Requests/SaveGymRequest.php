<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveGymRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
            'key' => ['required', 'string', 'max:255', 'unique:gyms'],
            'ubicacion' => ['required', 'string', 'max:255'],
            'img' => ['required', 'image','mimes:jpg,jpeg,png,svg','max:2048']
        ];
    }
}
