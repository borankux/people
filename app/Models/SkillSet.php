<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SkillSet
 *
 * @property int $id
 * @property int $user_id
 * @property int $skill_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Skill[] $skills
 * @property-read int|null $skills_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet whereSkillId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillSet whereUserId($value)
 * @mixin \Eloquent
 */
class SkillSet extends Model
{
    public function skills()
    {
        return $this->hasMany(Skill::class, 'id', 'skill_id');
    }
}
