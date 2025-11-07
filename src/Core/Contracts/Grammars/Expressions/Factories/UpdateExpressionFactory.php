<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\LeftHandSideExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UnaryExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\UpdateExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\InputElementType;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface UpdateExpressionFactory
{
    /** @param InputElementType::DoublePlus|InputElementType::DoublePlus $updateOperator */
    public function createPrefixed(
        InputElementType $updateOperator,
        UnaryExpression $unaryExpression,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): UpdateExpression;

    /** @param InputElementType::DoublePlus|InputElementType::DoublePlus $updateOperator */
    public function createPostfixed(
        LeftHandSideExpression $leftHandSideExpression,
        InputElementType $updateOperator,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): UpdateExpression;
}
