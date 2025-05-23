<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\RealmRecord;

interface AddRestrictedFunctionProperties
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-addrestrictedfunctionproperties
     */
    public function __invoke(ObjectValue $function, RealmRecord $realm): BooleanValue;
}
