<?php declare(strict_types=1);

namespace Aleoosha\TauPid\Contracts;

use Aleoosha\TauPid\Contracts\DTO\PidSettings;
use Aleoosha\TauPid\Contracts\DTO\FixedPidResult;
use Aleoosha\Support\Types\FixedPoint;

/**
 * Interface for PID tuning logic.
 * Responsible for adjusting coefficients based on system signals.
 */
interface PidTunerInterface
{
    /**
     * Tune settings based on the current system state.
     * 
     * @param PidSettings $currentSettings Active settings
     * @param FixedPoint $currentError System feedback signal
     * @param FixedPidResult $lastResult Previous calculation result
     * @return PidSettings New (adjusted) settings
     */
    public function tune(
        PidSettings $currentSettings, 
        FixedPoint $currentError, 
        ?FixedPidResult $lastResult
    ): PidSettings;
}
