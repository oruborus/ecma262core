<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\FunctionObjects;

use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface MakeMethod
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-makemethod
     */
    public function __invoke(ObjectValue $f, ObjectValue $homeObject): UndefinedValue;
}
