<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Values\ListValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;

interface OrdinaryOwnPropertyKeys
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-ordinaryownpropertykeys
     *
     * @return ListValue<StringValue|SymbolValue>
     */
    public function __invoke(ObjectValue $object): ListValue;
}
