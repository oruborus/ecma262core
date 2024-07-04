<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\GeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Nodes\Node;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;
use Oru\EcmaScript\Core\Contracts\Values\UndefinedValue;

interface GeneratorStart
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-generatorstart
     *
     * @param Node|callable(Agent):LanguageValue $generatorBody
     * 
     * @throws AbruptCompletion
     */
    public function __invoke(Agent $agent, ObjectValue $generator, Node|callable $generatorBody): UndefinedValue;
}
