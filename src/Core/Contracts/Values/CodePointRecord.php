<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface CodePointRecord extends SpecificationValue
{
    public function getCodePoint(): int;

    public function getCodeUnitCount(): int;

    public function getIsUnpairedSurrogate(): bool;
}
