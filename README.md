# TAU PID Contracts

Formal definitions and interfaces for Proportional-Integral-Derivative (PID) control loops.

## Overview
This package establishes the "Rules of Engagement" for automated regulation. By defining standardized interfaces for Calculators and Tuners, it allows the system to swap mathematical engines without breaking the core logic.

## Key Components
- **PidSettings DTO**: Immutable configuration for P, I, D coefficients and Anti-Windup limits.
- **FixedPidResult DTO**: Structured output of a calculation cycle, preserving state.
- **MetricProfile DTO**: Mapping between a telemetry metric and its specific PID configuration.
- **PidCalculatorInterface**: The contract for any mathematical engine.

## Installation
```bash
composer require aleoosha/tau-pid-contracts
```

## Level in Architecture
**Level 0 (Atmospheric)**: Pure protocol definitions. Depends only on `support-types`.
