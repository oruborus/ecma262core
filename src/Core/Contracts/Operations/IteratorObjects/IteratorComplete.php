<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IteratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface IteratorComplete
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-iteratorcomplete
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $iterResult): BooleanValue;
}
