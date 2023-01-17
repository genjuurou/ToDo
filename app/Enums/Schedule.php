<?php

namespace App\Enums;

enum Schedule: string
{
    case TODAY = 'today';
    case TOMORROW = 'tomorrow';
    case UPCOMING = 'upcoming';
}
