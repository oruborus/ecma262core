<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AssignmentExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ElementList;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\Elision;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\SpreadElement;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ElementListFactory
{
    public function create(
        ?ElementList $elementList,
        ?Elision $elision,
        AssignmentExpression|SpreadElement $element,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ElementList;
}
