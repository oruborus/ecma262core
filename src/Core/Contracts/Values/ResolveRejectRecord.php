<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface ResolveRejectRecord extends SpecificationValue
{
    /**
     * @psalm-mutation-free
     */
    public function resolve(): UndefinedValue|ObjectValue;

    /**
     * @psalm-mutation-free
     */
    public function reject(): UndefinedValue|ObjectValue;
}
