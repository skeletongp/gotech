<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->user()->rol=='admin') {
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo'=>'required|max:5',
            'nombre'=>'required|max:30',
            'descripcion'=>'required|max:150|min:50',
            'categoria_id'=>'required',
            'fotos'=>'required',
        ];
    }
}
