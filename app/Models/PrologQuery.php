<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrologQuery extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content',
    ];

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
