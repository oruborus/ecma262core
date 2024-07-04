<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface PromiseCapabilityRecord extends SpecificationValue
{
    public function promise(): ObjectValue;

    public function resolve(): ObjectValue;

    public function reject(): ObjectValue;
}
