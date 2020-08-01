<?php


namespace App\Http\Requests;

/**
 * Class FreelancerRequest
 * @package App\Http\Requests
 * @property int $id
 * @property string $name
 * @property string $second_name
 * @property string $family
 * @property float $price
 * @property string $email
 * @property string $phone
 */

class FreelancerRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|int',
            'email' => 'required|string',
            'phone' => 'string',
            'second_name'=> 'string',
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
            'name.required' => 'Name required!',
            'price.required' => 'Price required!',
            'email.required' => 'Email required!',
            'phone.string' => 'Phone should be sting'
        ];
    }
}
