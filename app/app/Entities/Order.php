<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\Order
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $email
 * @property string $phone
 * @property int|null $customer_id
 * @property int|null $application_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Entities\Application|null $applications
 * @property-read \App\Entities\Customer|null $customer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereApplicationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
   protected $guarded = [];

   public function customer(){
       return $this->belongsTo(Customer::class);
   }
   public function applications()
   {
       return $this->hasOne(Application::class);
   }
}
