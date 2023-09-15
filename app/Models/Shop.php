<?php

namespace App\Models;

/**
 * App\Models\Shop
 *
 * @property int $id
 * @property string $name
 * @property string|null $address
 * @property string|null $description
 * @property string|null $working_hours_from
 * @property string|null $working_hours_to
 * @property float|null $rating
 * @property string|null $photo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkingHoursFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shop whereWorkingHoursTo($value)
 * @mixin \Eloquent
 */
class Shop extends CustomModel
{
}
