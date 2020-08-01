<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Entities{
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
 */
	class Freelancer extends \Eloquent {}
}

namespace App\Entities{
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
 */
	class Order extends \Eloquent {}
}

namespace App\Entities{
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
 */
	class Customer extends \Eloquent {}
}

namespace App\Entities{
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
 */
	class Application extends \Eloquent {}
}

