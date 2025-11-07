<?php

declare(strict_types=1);

namespace Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Factories;

use Oru\EcmaScript\Core\Contracts\Grammars\Expressions\Productions\PrimaryExpression;
use Oru\EcmaScript\Core\Contracts\Grammars\LexicalGrammar\Productions\RegularExpressionLiteral;
use Oru\EcmaScript\Core\Contracts\Position;
use Oru\EcmaScript\Core\Contracts\Values\SourceCode;

interface PrimaryExpressionFactory
{
    public function createThis(
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): PrimaryExpression;

    public function createWithRegularExpressionLiteral(
        RegularExpressionLiteral $regularExpressionLiteral,
        SourceCode $sourceCode,
        Position $position,
        Position $next,
    ): PrimaryExpression;
}
