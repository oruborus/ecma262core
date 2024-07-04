<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface FunctionDeclaration extends HoistableDeclaration
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-instantiateordinaryfunctionobject
     */
    public function instantiateOrdinaryFunctionObject(Agent $agent, EnvironmentRecord $scope): ObjectValue;
}
