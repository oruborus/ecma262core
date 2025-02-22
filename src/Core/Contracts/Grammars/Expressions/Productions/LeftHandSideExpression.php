<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassHeritage;
use Oru\EcmaScript\Core\Contracts\StaticSemantics\HasIsDestructuring;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;

interface LeftHandSideExpression extends UpdateExpression, DestructuringAssignmentTarget, ClassHeritage, HasIsDestructuring
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-isidentifierref
     */
    public function isIdentifierRef(Agent $agent): BooleanValue;
}
