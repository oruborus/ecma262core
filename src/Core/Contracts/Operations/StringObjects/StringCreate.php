<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\StringObjects;

use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\StringValue;

interface StringCreate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-stringcreate
     */
    public function __invoke(StringValue $value, ObjectValue $prototype): ObjectValue;
}
