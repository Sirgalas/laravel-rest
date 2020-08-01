<?php


namespace App\Http\Requests;

/**
 * Class CustomerRequest
 * @package App\Http\Requests
 * @property string $name
 * @property string $second_name
 * @property string $family
 * @property string $email
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class CustomerRequest extends  ApiRequest
{

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'string',
            'second_name'=>'string',
            'family'=>'string'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'email.required' => 'Email is required!',
            'phone.string' => 'Phone should be sting'
        ];
    }
}
