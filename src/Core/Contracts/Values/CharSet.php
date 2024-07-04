<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

/**
 * @psalm-type Interval array{0: int, 1: int}
 * @psalm-type UnspecifiedInterval (int|Interval)
 */
interface CharSet extends SpecificationValue
{
    /**
     * @return Interval[]
     */
    public function getIntervals(): array;

    public function contains(int $value): bool;

    /**
     * @param int|UnspecifiedInterval[] $value
     */
    public function add(int|array $value): CharSet;

    /**
     * @param int|UnspecifiedInterval[] $value
     */
    public function remove(int|array $value): CharSet;
}
