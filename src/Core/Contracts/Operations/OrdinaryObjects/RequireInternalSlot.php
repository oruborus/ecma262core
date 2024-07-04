<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\FieldName;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface RequireInternalSlot
{
    /**
     * @see https://tc39.es/ecma262/#sec-requireinternalslot
     * 
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $object, FieldName $internalSlot): UnusedValue;
}
