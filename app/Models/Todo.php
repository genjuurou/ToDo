<?php

namespace App\Models;

use App\Enums\Importance;
use App\Enums\Scheduled;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory;

    protected $casts = [
        'importance' => Importance::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeScheduled(Builder $query, Scheduled $scheduled): Builder
    {
        return match ($scheduled) {
            Scheduled::TODAY => $query->where('scheduled_at', today()),
            Scheduled::TOMORROW => $query->where('scheduled_at', today()->addDay()),
            Scheduled::UPCOMING => $query->where('scheduled_at', '>', today()),
        };
    }
}
