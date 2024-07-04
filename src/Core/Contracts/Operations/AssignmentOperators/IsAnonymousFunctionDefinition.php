<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Operations\AssignmentOperators;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Nodes\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Nodes\Initializer;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface IsAnonymousFunctionDefinition
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-isanonymousfunctiondefinition
     */
    public function __invoke(Agent $agent, AssignmentExpression|Initializer $expr): BooleanValue;
}
