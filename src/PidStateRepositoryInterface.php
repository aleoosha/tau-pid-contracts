<?php declare(strict_types=1);

namespace Aleoosha\TauPid\Contracts;

use Aleoosha\TauPid\Contracts\DTO\FixedPidResult;
use Aleoosha\TauPid\Contracts\DTO\PidSettings;

/**
 * Interface for persisting and retrieving PID state and settings.
 */
interface PidStateRepositoryInterface
{
    /**
     * Save the current state of the PID controller.
     */
    public function saveState(string $key, FixedPidResult $state): void;

    /**
     * Retrieve the last saved state of the PID controller.
     */
    public function getState(string $key): ?FixedPidResult;

    /**
     * Save PID settings/coefficients.
     */
    public function saveSettings(string $key, PidSettings $settings): void;

    /**
     * Retrieve PID settings/coefficients.
     */
    public function getSettings(string $key): ?PidSettings;
}
