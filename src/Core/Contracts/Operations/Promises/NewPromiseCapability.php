<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\Promises;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\PromiseCapabilityRecord;

interface NewPromiseCapability
{
    /**
     * @see https://tc39.es/ecma262/#sec-newpromisecapability
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $c): PromiseCapabilityRecord;
}
