<?php

namespace content\modules\convert_to_seconds;

/**
 * Use this constants for the $unit param of convertToSeconds()
 */
enum TimeUnit
{
    case SECONDS;
    case MINUTES;
    case HOURS;
    case DAYS;
    case WEEKS;
    case MONTHS;
    case YEARS;
    case DECADES;
}
