<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface AsyncGeneratorDeclaration extends HoistableDeclaration
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-instantiateasyncgeneratorfunctionobject
     *
     * @throws AbruptCompletion
     */
    public function instantiateAsyncGeneratorFunctionObject(Agent $agent, EnvironmentRecord $scope): ObjectValue;
}
