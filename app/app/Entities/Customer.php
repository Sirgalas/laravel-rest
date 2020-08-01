<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\Customer
 *
 * @property int $id
 * @property string $name
 * @property string $second_name
 * @property string $family
 * @property string $email
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entities\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer whereSecondName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
