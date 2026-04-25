<?php

use Aleoosha\Support\Types\FixedPoint;
use Aleoosha\TauPid\Contracts\DTO\PidSettings;
use Aleoosha\TauPid\Contracts\DTO\FixedPidResult;

test('PidSettings stores values correctly', function () {
    $kp = FixedPoint::fromFloat(1.5);
    $ki = FixedPoint::fromFloat(0.1);
    $kd = FixedPoint::fromFloat(0.05);
    $antiWindup = FixedPoint::fromFloat(100.0);

    $settings = new PidSettings($kp, $ki, $kd, $antiWindup);

    expect($settings->kp->toFloat())->toBe(1.5)
        ->and($settings->ki->toFloat())->toBe(0.1)
        ->and($settings->kd->toFloat())->toBe(0.05)
        ->and($settings->antiWindup->toFloat())->toBe(100.0);
});

test('FixedPidResult stores state and calculation results', function () {
    $output = FixedPoint::fromFloat(0.8);
    $lastError = FixedPoint::fromFloat(0.1);
    $integral = FixedPoint::fromFloat(0.5);
    $timestamp = 1712345678900;
    
    $kp = FixedPoint::fromFloat(1.0);
    $ki = FixedPoint::fromFloat(0.5);
    $kd = FixedPoint::fromFloat(0.1);

    $result = new FixedPidResult(
        $output, 
        $lastError, 
        $integral, 
        $timestamp,
        $kp, $ki, $kd
    );

    expect($result->output->toFloat())->toBe(0.8)
        ->and($result->timestampMs)->toBe($timestamp)
        ->and($result->kp->value)->toBe($kp->value);
});
