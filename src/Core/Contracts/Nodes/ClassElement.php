<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Nodes;

use Oru\EcmaScript\Core\Contracts\Agent;
use Oru\EcmaScript\Core\Contracts\RuntimeSemantics\HasPropertyDefinitionEvaluation;
use Oru\EcmaScript\Core\Contracts\Values\AbruptCompletion;
use Oru\EcmaScript\Core\Contracts\Values\BooleanValue;
use Oru\EcmaScript\Core\Contracts\Values\ClassElementKind;
use Oru\EcmaScript\Core\Contracts\Values\MethodDefinitionRecord;
use Oru\EcmaScript\Core\Contracts\Values\ObjectValue;

interface ClassElement extends ClassElementList, HasPropertyDefinitionEvaluation
{
    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-classelementkind
     */
    public function classElementKind(Agent $agent): ClassElementKind;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-static-semantics-isstatic
     */
    public function isStatic(Agent $agent): BooleanValue;

    /**
     * @see https://262.ecma-international.org/12.0/#sec-runtime-semantics-definemethod
     *
     * @throws AbruptCompletion
     */
    public function defineMethod(Agent $agent, ObjectValue $object, ObjectValue $functionPrototype): MethodDefinitionRecord;
}
