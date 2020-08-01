<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\Freelancer
 *
 * @property int $id
 * @property string $name
 * @property string $second_name
 * @property string $family
 * @property float $price
 * @property string $email
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entities\Application[] $applications
 * @property-read int|null $applications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer whereSecondName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entities\Freelancer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Freelancer extends Model
{
    protected $guarded = [];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
