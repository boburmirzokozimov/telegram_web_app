<?php

namespace App\Models;

/**
 * App\Models\Basket
 *
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property float $price
 * @property int $count
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Basket whereUserId($value)
 * @mixin \Eloquent
 */
class Basket extends CustomModel
{
}
