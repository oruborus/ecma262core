<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\RuntimeSemantics;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface HasPropertyDefinitionEvaluation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-propertydefinitionevaluation
     *
     * @throws AbruptCompletion
     */
    public function propertyDefinitionEvaluation(Agent $agent, ObjectValue $object, BooleanValue $enumerable): LanguageValue;
}
