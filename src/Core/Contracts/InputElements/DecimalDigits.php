<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\InputElements;

use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasMV;

interface DecimalDigits extends InputElement, HasMV
{
    public function numberOfNumericCodePoints(): int;
}
