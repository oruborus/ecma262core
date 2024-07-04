<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorBrand;
use Oru\EcmaScript\Core\Contracts\Values\GeneratorState;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface GeneratorValidate
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-generatorvalidate
     *
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $generator, GeneratorBrand $generatorBrand): GeneratorState;
}
