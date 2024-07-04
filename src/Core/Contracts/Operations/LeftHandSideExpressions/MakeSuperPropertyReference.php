<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\LeftHandSideExpressions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ReferenceRecord;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface MakeSuperPropertyReference
{
    /**
     * @see https://tc39.es/ecma262/#sec-makesuperpropertyreference
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, LanguageValue $actualThis, StringValue|SymbolValue $propertyKey, BooleanValue $strict): ReferenceRecord;
}
