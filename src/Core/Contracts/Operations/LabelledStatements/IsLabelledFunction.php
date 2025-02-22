<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\LabelledStatements;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\Node;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface IsLabelledFunction
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-islabelledfunction
     */
    public function __invoke(Agent $agent, Node $stmt): BooleanValue;
}
