<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @mixin IdeHelperClause
 */
class Clause extends Model
{
    use HasFactory;

    protected $fillable = [
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }

    public function predicate(): HasOne
    {
        return $this->hasOne(Predicate::class);
    }
}
