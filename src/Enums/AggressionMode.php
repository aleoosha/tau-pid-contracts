<?php declare(strict_types=1);

namespace Aleoosha\TauPid\Contracts\Enums;

enum AggressionMode: string
{
    case SOFT = 'soft';
    case BALANCED = 'balanced';
    case AGGRESSIVE = 'aggressive';
    case PANIC = 'panic';

    /**
     * Get technical coefficients for the selected mode.
     */
    public function getSettings(): array
    {
        return match($this) {
            self::SOFT       => ['kp' => 2.0,  'ki' => 0.2, 'kd' => 1.0],
            self::BALANCED   => ['kp' => 10.0, 'ki' => 1.0, 'kd' => 5.0],
            self::AGGRESSIVE => ['kp' => 40.0, 'ki' => 2.0, 'kd' => 15.0],
            self::PANIC      => ['kp' => 100.0, 'ki' => 5.0, 'kd' => 30.0],
        };
    }
}
