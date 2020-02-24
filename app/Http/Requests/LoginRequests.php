<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequests extends FormRequest{

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
        'email' => ['required'],
        'password' => ['required'],
    ];
}
public function messages()
{
    return [

    ];
}



}

