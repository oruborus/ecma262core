<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface OrdinaryDelete
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinarydelete
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $object, StringValue|SymbolValue $propertyKey): BooleanValue;
}
