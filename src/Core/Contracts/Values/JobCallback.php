<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface JobCallback extends SpecificationValue
{
    public function callback(): ObjectValue;

    public function hostDefined(): mixed;
}
