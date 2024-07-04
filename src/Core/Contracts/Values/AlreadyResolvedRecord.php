<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface AlreadyResolvedRecord extends SpecificationValue
{
    public function value(?BooleanValue $v = null): BooleanValue;
}
