<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface SpecifierModulePair extends SpecificationValue
{
    /**
     * @psalm-mutation-free
     */
    public function specifier(): StringValue;

    /**
     * @psalm-mutation-free
     */
    public function module(): ModuleRecord;
}
