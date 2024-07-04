<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\IterationStatements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\LanguageValue;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface CreateForInIterator
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-enumerate-object-properties
     */
    public function __invoke(Agent $agent, LanguageValue $object): ObjectValue;
}
