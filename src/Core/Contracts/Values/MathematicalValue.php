<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

use Stringable;

interface MathematicalValue extends Stringable
{
    public function __toString(): string;

    public function add(Stringable|string $value): self;

    public function appendIntegerDigitOfBase(Stringable|string $digit, int $base): self;

    public function multiply(Stringable|string $value): self;

    public function negate(): self;

    public function roundTo20SignificantDigits(): self;
}
