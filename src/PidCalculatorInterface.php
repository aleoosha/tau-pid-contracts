<?php declare(strict_types=1);

namespace Aleoosha\TauPid\Contracts;

use Aleoosha\Support\Types\FixedPoint;
use Aleoosha\TauPid\Contracts\DTO\PidSettings;
use Aleoosha\TauPid\Contracts\DTO\FixedPidResult;

interface PidCalculatorInterface
{
    /**
     * Calculates the control output based on current error and previous state.
     * 
     * @param FixedPoint $error The difference between setpoint and actual value
     * @param int $deltaTimeMs Time elapsed since last calculation in milliseconds
     * @param FixedPidResult|null $previousState State from the previous tick (integral, etc.)
     * @param PidSettings $settings Current PID coefficients
     */
    public function calculate(
        FixedPoint $error,
        int $deltaTimeMs,
        ?FixedPidResult $previousState,
        PidSettings $settings
    ): FixedPidResult;

    /**
     * Resets the internal state of the calculator.
     */
    public function reset(): void;
}
