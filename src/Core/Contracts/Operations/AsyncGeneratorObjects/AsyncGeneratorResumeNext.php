<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncGeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface AsyncGeneratorResumeNext
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asyncgeneratorresumenext
     *
     * @throws AbruptCompletion
     */
    public function __invoke(ObjectValue $generator): UndefinedValue;
}
