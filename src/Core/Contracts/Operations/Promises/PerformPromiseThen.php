<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PromiseCapabilityRecord;

interface PerformPromiseThen
{
    /**
     * @see https://tc39.es/ecma262/#sec-performpromisethen
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $promise, LanguageValue $onFulfilled, LanguageValue $onRejected, ?PromiseCapabilityRecord $resultCapability = null): LanguageValue;
}
