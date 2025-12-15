<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface NumericValue extends PrimitiveValue
{
    public function isNaN(): bool;

    public function isInfinite(): bool;

    public function isNegativeInfinity(): bool;

    public function isPositiveInfinity(): bool;
}
