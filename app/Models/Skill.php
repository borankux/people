<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Skill
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $name
 * @property int|null $cat_id
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereName($value)
 * @property int|null $category_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Skill whereCategoryId($value)
 */
class Skill extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
