<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\StatementsAndDeclarations\Productions;

use Oru\EcmaScript\Core\Contracts\Values\EnvironmentRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface HoistableDeclaration extends Declaration
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-instantiatefunctionobject
     */
    public function instantiateFunctionObject(EnvironmentRecord $scope): ObjectValue;
}
