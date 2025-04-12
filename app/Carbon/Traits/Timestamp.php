<?php

namespace App\Carbon\Traits;

use Carbon\Traits\Timestamp as BaseTimestamp;

trait Timestamp
{
    use BaseTimestamp;

    /**
     * Create a Carbon instance from a timestamp.
     *
     * @param int|float $timestamp
     * @param \DateTimeZone|string|null $tz
     * @return static
     */
    public static function createFromTimestamp($timestamp, $tz = null)
    {
        return parent::createFromTimestamp($timestamp, $tz);
    }
} 