<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\AdditiveExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ShiftExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface ShiftExpressionFactory
{
    /** @param InputElementType::DoubleLessThan|InputElementType::DoubleGreaterThan|InputElementType::TripleGreaterThan $shiftOperator */
    public function create(
        ShiftExpression $shiftExpression,
        InputElementType $shiftOperator,
        AdditiveExpression $additiveExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): ShiftExpression;
}
