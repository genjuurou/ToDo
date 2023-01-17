<?php

namespace App\Enums;

enum Scheduled: string
{
    case TODAY = 'today';
    case TOMORROW = 'tomorrow';
    case UPCOMING = 'upcoming';
}
