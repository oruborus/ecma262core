<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Values;

interface GraphLoadingState extends SpecificationValue
{
    public function promiseCapability(): PromiseCapabilityRecord;

    public function isLoading(?BooleanValue $isLoading = null): BooleanValue;

    public function pendingModulesCount(?NumberValue $pendingModulesCount = null): NumberValue;

    /**
     * @param ListValue<int, CyclicModuleRecord> $visited
     * @return ListValue<int, CyclicModuleRecord>
     */
    public function visited(?ListValue $visited = null): ListValue;

    public function hostDefined(mixed $hostDefined = null): mixed;
}
