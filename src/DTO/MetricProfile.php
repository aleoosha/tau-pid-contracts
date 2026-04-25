<?php 

declare(strict_types=1);

namespace Aleoosha\TauPid\Contracts\DTO;

use Aleoosha\Support\Types\FixedPoint;

/**
 * Configuration for a specific metric control loop.
 */
final class MetricProfile
{
    public function __construct(
        public readonly string $metricName,
        public readonly FixedPoint $targetThreshold,
        public readonly PidSettings $pidSettings
    ) {}
}
