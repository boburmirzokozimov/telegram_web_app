<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property float|null $balance
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Client newModelQuery()
 * @method static Builder|Client newQuery()
 * @method static Builder|Client query()
 * @method static Builder|Client whereBalance($value)
 * @method static Builder|Client whereCreatedAt($value)
 * @method static Builder|Client whereFirstName($value)
 * @method static Builder|Client whereId($value)
 * @method static Builder|Client whereIsActive($value)
 * @method static Builder|Client whereLastName($value)
 * @method static Builder|Client whereUpdatedAt($value)
 * @method static Builder|Client whereUsername($value)
 * @mixin Eloquent
 */
class Client extends Authenticatable
{
    protected $guarded = false;
}
