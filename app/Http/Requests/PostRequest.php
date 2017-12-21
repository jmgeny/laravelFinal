<?php

namespace soyDeporte\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //validacion
            'titulo' => 'required',
            'texto' => 'required',
            // 'estado'=> 'required',
            // 'user_id' => 'required',
            // 'categori_id' => 'required'
        ];
    }
}
