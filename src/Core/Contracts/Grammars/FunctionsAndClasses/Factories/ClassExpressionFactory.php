<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\BindingIdentifier;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\FunctionsAndClasses\Productions\ClassTail;

interface ClassExpressionFactory
{
    public function create(?BindingIdentifier $bindingIdentifier, ClassTail $classTail): ClassExpression;
}
