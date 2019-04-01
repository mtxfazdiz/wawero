<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class NewsletterValidator extends FormRequest
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
            'email' => 'required|email|max:40|unique:newsletters',
            'name' => 'required|max:30'
        ];
    }

    public function messages()
{
    return [
        'email.required' => 'Pole email jest wymagane.',
        'email.unique' => 'Ten email jest już zapisany.',
        //'email' => 'unique:users,email_address'
        'name.required'  => 'Pole imię jest wymagane.',
        'validation.email' => 'Wpisz poprawny email.',
    ];
}
}
