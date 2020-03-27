<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TimeFrame
 *
 * @property int $id
 * @property int $user_id
 * @property string $from
 * @property string $till
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame whereTill($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\TimeFrame whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\User $user
 */
class TimeFrame extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
