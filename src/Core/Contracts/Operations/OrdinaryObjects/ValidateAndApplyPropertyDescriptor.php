<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\OrdinaryObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\PropertyDescriptor;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;
use Oru\EcmaScript\Core\Contracts\Values\SymbolValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface ValidateAndApplyPropertyDescriptor
{
    /** @see https://tc39.es/ecma262/#sec-validateandapplypropertydescriptor */
    public function __invoke(
        ObjectValue|UndefinedValue $o,
        StringValue|SymbolValue $p,
        BooleanValue $extensible,
        PropertyDescriptor $desc,
        PropertyDescriptor|UndefinedValue $current,
    ): BooleanValue;
}
