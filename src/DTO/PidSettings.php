<?php declare(strict_types=1);

namespace Aleoosha\TauPid\Contracts\DTO;

use Aleoosha\Support\Types\FixedPoint;

/**
 * PID configuration settings for a specific channel.
 */
final class PidSettings
{
    public function __construct(
        public readonly FixedPoint $kp,
        public readonly FixedPoint $ki,
        public readonly FixedPoint $kd,
        /** Limit for the integral sum to prevent windup effect */
        public readonly FixedPoint $antiWindup
    ) {}
}
