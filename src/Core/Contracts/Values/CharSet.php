<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface CharSet extends SpecificationValue
{
    /** @var list<int>|callable(int): bool $characters */
    public mixed $characters { get; }

    public function contains(int $value): bool;

    public function union(CharSet $other): CharSet;
}
