<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\StaticSemantics;

use Oru\EcmaScript\Core\Contracts\InputElements\InputElementType;

interface HasIs
{
    public function is(InputElementType $value): bool;
}
