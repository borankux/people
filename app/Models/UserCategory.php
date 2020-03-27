<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserCategory
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserCategory whereUserId($value)
 * @mixin \Eloquent
 */
class UserCategory extends Model
{
    public function categories()
    {
        return $this->hasMany(Category::class, 'id', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
