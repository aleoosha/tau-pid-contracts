<?php declare(strict_types=1);

namespace Aleoosha\TauPid\Contracts\DTO;

use Aleoosha\Support\Types\FixedPoint;

/**
 * The result of a PID calculation and the current regulator state.
 */
final class FixedPidResult
{
    public function __construct(
        public readonly FixedPoint $output,    // Control signal
        public readonly FixedPoint $lastError, // Error from previous tick for derivative part
        public readonly FixedPoint $integral,  // Accumulated integral sum
        public readonly int $timestampMs,      // Calculation timestamp in ms
        public readonly FixedPoint $kp,        // Active coefficients used for this result
        public readonly FixedPoint $ki,
        public readonly FixedPoint $kd
    ) {}
}
