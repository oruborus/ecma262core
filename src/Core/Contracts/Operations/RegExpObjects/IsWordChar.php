<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\RegExpObjects;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface IsWordChar
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-iswordchar-abstract-operation
     */
    public function __invoke(Agent $agent, int $e): BooleanValue;
}
