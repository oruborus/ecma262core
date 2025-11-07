<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\EqualityExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\RelationalExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface EqualityExpressionFactory
{
    /** @param InputElementType::DoubleEquals|InputElementType::ExclamationMarkEquals|InputElementType::TripleEquals|InputElementType::ExclamationMarkDoubleEquals $operator */
    public function create(
        EqualityExpression $equalityExpression,
        InputElementType $operator,
        RelationalExpression $relationalExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): EqualityExpression;
}
