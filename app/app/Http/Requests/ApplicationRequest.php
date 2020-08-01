<?php


namespace App\Http\Requests;

/**
 * Class ApplicationRequest
 * @package App\Http\Requests
 * @property string $name
 * @property string $comment
 * @property int|null $freelancer_id
 * @property int|null $order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Entities\Freelancer|null $freelancer
 * @property-read \App\Entities\Order|null $order
 */
class ApplicationRequest extends ApiRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'comment' => 'string',
            'freelancer_id'  =>  'integer|exists:freelancers,id',
            'order_id' => 'integer|exists:orders,id',
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
            'comment.required' => 'Comment required!',
            'freelancer_id.required' => 'Freelancer Not an existing ID!',
            'order_id.required' => 'Order Not an existing ID'
        ];
    }
}
