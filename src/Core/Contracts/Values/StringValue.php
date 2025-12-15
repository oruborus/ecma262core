<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface StringValue extends PrimitiveValue
{
    /**
     * @return array<int, int>
     */
    public function codeUnits(): array;

    /**
     * @return array<int, int>
     */
    public function codePoints(): array;

    public function getLength(): int;

    public function ord(): int;

    public function substr(NumberValue $start, NumberValue $length): StringValue;

    public function stringIndexOf(StringValue $searchValue, NumberValue $fromIndex): NumberValue;

    public function codePointAt(int $index): int;

    /** @param (int|array<int, int>|string|StringValue)[] $values */
    public function append(int|array|string|StringValue ...$values): static;

    /**
     * @return array<int, int>
     */
    public function to16BitBMPCodePoints(): array;
}
