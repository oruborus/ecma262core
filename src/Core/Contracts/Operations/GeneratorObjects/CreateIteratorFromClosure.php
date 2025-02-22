<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorBrand;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateIteratorFromClosure
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-createiteratorfromclosure
     *
     * @param callable(Agent): LanguageValue $closure
     */
    public function __invoke(Agent $agent, callable $closure, GeneratorBrand $generatorBrand, ObjectValue $generatorPrototype): ObjectValue;
}
