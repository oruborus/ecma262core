<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface QuantifierEvaluationResult extends SpecificationValue
{
    public function getMin(): int;

    public function getMax(): int|float;

    public function getGreedy(): bool;
}
