<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AsyncGeneratorObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AsyncGeneratorStart
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-asyncgeneratorstart
     *
     * @param Node|(callable(Agent): LanguageValue) $generatorBody
     */
    public function __invoke(Agent $agent, ObjectValue $generator, Node|callable $generatorBody): LanguageValue;
}
