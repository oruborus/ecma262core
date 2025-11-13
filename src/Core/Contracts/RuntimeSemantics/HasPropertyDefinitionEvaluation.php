<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\RuntimeSemantics;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UnusedValue;

interface HasPropertyDefinitionEvaluation
{
    /**
     * @see https://tc39.es/ecma262/#sec-runtime-semantics-propertydefinitionevaluation
     *
     * @throws AbruptCompletion
     */
    public function propertyDefinitionEvaluation(ObjectValue $object): UnusedValue;
}
