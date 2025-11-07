<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\RelationalExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\ShiftExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\PrivateIdentifier;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface RelationalExpressionFactory
{
    /** @param InputElementType::LessThan|InputElementType::GreaterThan|InputElementType::LessThanEquals|InputElementType::GreaterThanEquals|InputElementType::Instanceof|InputElementType::In $relationalOperator */
    public function create(
        RelationalExpression $relationalExpression,
        InputElementType $relationalOperator,
        ShiftExpression $shiftExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): RelationalExpression;

    public function createWithPrivateIdentifier(
        PrivateIdentifier $privateIdentifier,
        ShiftExpression $shiftExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): RelationalExpression;
}
