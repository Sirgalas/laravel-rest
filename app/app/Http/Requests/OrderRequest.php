<?php


namespace App\Http\Requests;

/**
 * Class OrderRequest
 * @package App\Http\Requests
 * @property string $name
 * @property string $description
 * @property string $email
 * @property string $phone
 * @property int|null $customer_id
 * @property int|null $application_id
 */
class OrderRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name'  => 'required|string',
            'description'  => 'string',
            'customer_id' =>  'required|integer|exists:customers,id',
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
            'description.required' => 'Description required!',
            'customer_id.required' => 'Customer Not an existing ID',
        ];
    }

}
