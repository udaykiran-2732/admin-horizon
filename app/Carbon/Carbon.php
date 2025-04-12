<?php

namespace App\Carbon;

use Carbon\Carbon as BaseCarbon;
use App\Carbon\Traits\Timestamp;

class Carbon extends BaseCarbon
{
    use Timestamp;

    #[\ReturnTypeWillChange]
    public static function createFromTimestamp($timestamp, $tz = null): static
    {
        return parent::createFromTimestamp($timestamp, $tz);
    }

    public function getDaysFromStartOfWeek(?int $weekStartsAt = null): int
    {
        return parent::getDaysFromStartOfWeek($weekStartsAt);
    }

    public function setDaysFromStartOfWeek(int $numberOfDays, ?int $weekStartsAt = null): static
    {
        return parent::setDaysFromStartOfWeek($numberOfDays, $weekStartsAt);
    }

    public function utcOffset(?int $minuteOffset = null): static
    {
        return parent::utcOffset($minuteOffset);
    }

    public function locale(?string $locale = null, ...$fallbackLocales): static
    {
        return parent::locale($locale, ...$fallbackLocales);
    }

    public function setDefaultTimezone($date = null): static
    {
        return parent::setDefaultTimezone($date);
    }
} 