<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface ResolvedBinding extends SpecificationValue
{
    /**
     * @psalm-mutation-free
     */
    public function module(): ModuleRecord;

    /**
     * @psalm-mutation-free
     *
     * @return StringValue|ImportName::NAMESPACE
     */
    public function bindingName(): StringValue|ImportName;
}
