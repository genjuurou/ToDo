<?php

namespace App\Enums;

enum Importance: int
{
    case LOW = 1;
    case MEDIUM = 2;
    case HIGH = 3;

    public static function toArray(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($item, $key) => [$item->value => $item->name])
            ->toArray();
    }

    public function getLabel(): string
    {
        return match ($this) {
            self::HIGH => 'High',
            self::MEDIUM => 'Medium',
            self::LOW => 'Low',
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::HIGH => 'rose',
            self::MEDIUM => 'yellow',
            self::LOW => 'green',
        };
    }
}
