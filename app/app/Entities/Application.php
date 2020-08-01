<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\Application
 *
 * @property int $id
 * @property string $name
 * @property string $comment
 * @property int|null $freelancer_id
 * @property int|null $order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Entities\Freelancer|null $freelancer
 * @property-read \App\Entities\Order|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application whereFreelancerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Application whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Application extends Model
{

    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function freelancer()
    {
        return$this->belongsTo(Freelancer::class);
    }
}
